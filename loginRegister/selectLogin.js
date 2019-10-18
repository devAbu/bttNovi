$('#selectAlertLog').hide();
$('#selectLogButton').click(function () {
    $("#selectAlertLog").removeClass('alert-success').removeClass('alert-danger');
    var selectEmailLog = $('#selectEmailLog').val();
    var selectPassLog = $('#selectPassLog').val();


    $.ajax({
        url: "dbSend/indexSentLog.php?task=login&emailLog=" + selectEmailLog + "&passLog=" + selectPassLog,
        success: function (data) {
            if (data.indexOf('sent') > -1) {
                $("#selectAlertLog").addClass('alert-success');
                $("#selectAlertLog").html('Logged in successfully');
                $("#selectAlertLog").slideDown(500).delay(1000).slideUp(500);
                $('#selectEmailLog').val("");
                $('#selectPassLog').val("");

                //window.location("index.php");

                if (window.location.href == "http://bttbh.ba/login.php") {
                    var old = document.referrer;
                    console.log(old);

                    var arr = old.match(/verify.php?(.*)/);
                    /* if (arr != null) { // Did it match?
                        alert(arr[1]);
                    } */
                    setTimeout(function () {
                        if (arr != null) {
                            window.location.replace("index.php");
                        } else {
                            window.history.back();
                        }
                    }, 1500);
                } else {
                    var delay = 1500;
                    setTimeout(function () {
                        console.log(window.location.replace(window.location.href));
                    }, delay);
                }
            } else if (data.indexOf('activated') > -1) {
                $("#selectAlertLog").addClass('alert-danger');
                $("#selectAlertLog").html('Please activate your email address');
                $("#selectAlertLog").slideDown(500).delay(1000).slideUp(500);
            } else if (data.indexOf('pass') > -1) {
                $("#selectAlertLog").addClass('alert-danger');
                $("#selectAlertLog").html('Password is incorrect');
                $("#selectAlertLog").slideDown(500).delay(1000).slideUp(500);
            } else {
                $("#selectAlertLog").addClass('alert-danger');
                $("#selectAlertLog").html('Email is incorrect');
                $("#selectAlertLog").slideDown(500).delay(1000).slideUp(500);
            }
        },
        error: function (data, err) {
            $("#selectAlertLog").addClass('alert-danger');
            $("#selectAlertLog").html('Some problem occurred. We are sorry.');
            $("#selectAlertLog").slideDown(500).delay(1000).slideUp(500);
        }
    });
});

$('#eyeLog').click(function () {
    /* var elementType = $('#passSign').prev().prop('pass'); */
    var elementType = $('#selectPassLog').attr('type');
    console.log(elementType);
    if (elementType == "text") {
        $('#selectPassLog').attr('type', 'password');
    } else if (elementType == "password") {
        $('#selectPassLog').attr('type', 'text');
    }
});