$("#selectAlertLog").hide(),$("#selectLogButton").click(function(){$("#selectAlertLog").removeClass("alert-success").removeClass("alert-danger");var e=$("#selectEmailLog").val(),l=$("#selectPassLog").val();$.ajax({url:"dbSend/indexSentLog.php?task=login&emailLog="+e+"&passLog="+l,success:function(e){if(e.indexOf("sent")>-1)if($("#selectAlertLog").addClass("alert-success"),$("#selectAlertLog").html("Logged in successfully"),$("#selectAlertLog").slideDown(500).delay(1e3).slideUp(500),$("#selectEmailLog").val(""),$("#selectPassLog").val(""),"http://bttbh.ba/login.php"==window.location.href){var l=document.referrer;console.log(l);var t=l.match(/verify.php?(.*)/);setTimeout(function(){null!=t?window.location.replace("index.php"):window.history.back()},1500)}else{setTimeout(function(){console.log(window.location.replace(window.location.href))},1500)}else e.indexOf("activated")>-1?($("#selectAlertLog").addClass("alert-danger"),$("#selectAlertLog").html("Please activate your email address"),$("#selectAlertLog").slideDown(500).delay(1e3).slideUp(500)):e.indexOf("pass")>-1?($("#selectAlertLog").addClass("alert-danger"),$("#selectAlertLog").html("Password is incorrect"),$("#selectAlertLog").slideDown(500).delay(1e3).slideUp(500)):($("#selectAlertLog").addClass("alert-danger"),$("#selectAlertLog").html("Email is incorrect"),$("#selectAlertLog").slideDown(500).delay(1e3).slideUp(500))},error:function(e,l){$("#selectAlertLog").addClass("alert-danger"),$("#selectAlertLog").html("Some problem occurred. We are sorry."),$("#selectAlertLog").slideDown(500).delay(1e3).slideUp(500)}})}),$("#eyeLog").click(function(){var e=$("#selectPassLog").attr("type");console.log(e),"text"==e?$("#selectPassLog").attr("type","password"):"password"==e&&$("#selectPassLog").attr("type","text")});