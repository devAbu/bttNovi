$("#alertLog").hide(),$("#logButton").click(function(){$("#alertLog").removeClass("alert-success").removeClass("alert-danger");var e=$("#emailLog").val(),a=$("#passLog").val();$.ajax({url:"dbSend/indexSentLog.php?task=login&emailLog="+e+"&passLog="+a,success:function(e){if(e.indexOf("sent")>-1)if($("#alertLog").addClass("alert-success"),$("#alertLog").html("Logged in successfully"),$("#alertLog").slideDown(500).delay(1e3).slideUp(500),$("#emailLog").val(""),$("#passLog").val(""),"http://bttbh.ba/login.php"==window.location.href){var a=document.referrer;console.log(a);var l=a.match(/verify.php?(.*)/);setTimeout(function(){null!=l?window.location.replace("index.php"):window.history.back()},1500)}else{setTimeout(function(){console.log(window.location.replace(window.location.href))},1500)}else e.indexOf("activated")>-1?($("#alertLog").addClass("alert-danger"),$("#alertLog").html("Please activate your email address"),$("#alertLog").slideDown(500).delay(1e3).slideUp(500)):e.indexOf("pass")>-1?($("#alertLog").addClass("alert-danger"),$("#alertLog").html("Password is incorrect"),$("#alertLog").slideDown(500).delay(1e3).slideUp(500)):($("#alertLog").addClass("alert-danger"),$("#alertLog").html("Email is incorrect"),$("#alertLog").slideDown(500).delay(1e3).slideUp(500))},error:function(e,a){$("#alertLog").addClass("alert-danger"),$("#alertLog").html("Some problem occurred. We are sorry."),$("#alertLog").slideDown(500).delay(1e3).slideUp(500)}})}),$("#eyeLog").click(function(){var e=$("#passLog").attr("type");console.log(e),"text"==e?$("#passLog").attr("type","password"):"password"==e&&$("#passLog").attr("type","text")});