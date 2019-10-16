<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BTT || Request for changing password</title>
    <link rel="icon" type="image/ico" href="images/btt_logo_icon.ico" />
    <meta name="author" content="abu">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body  style="background-color:#ffd260">
    <?php

    require('connection/connect.php');

    if ($_REQUEST['email']) {
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $hashedPass = $hash_pass = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT email FROM registacija WHERE email = '$email'";
        $result = $dbc->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['email'] == $email) {

                    $query = "UPDATE registacija set password = '$hashedPass' where email = '$email'";

                    $result2 = $dbc->query($query);

                    if ($result2) {
                        echo "<script>setTimeout(function(){location='login.php'}, 2500)</script>";
                        echo '
                        <div style="margin-top:100px;font-size:20px;" class="offset-md-3 offset-sm-2 offset-1" >
                            Your password changed successfully!!! <br> Now you can <a href="login.php" style="text-decoration:none; color:white;">login</a> 
                        </div>';
                        //header("refresh:2;url=login");
                    }

                } else {
                    echo ('mail');
                }
            }
        } else {
            echo '<div style="margin-top:100px;">
                <div class="offset-md-3 offset-sm-2 offset-1" style="font-size:20px;" >
                    Invalid approach, please use the link that has been send to your email.<br> 
                </div>
                <div class="offset-md-3 offset-sm-2 mt-3 offset-1" style="font-size:20px;color:red">
                    Account that you used does not exists
                </div>
            </div>';
        }

    }

    ?>
</body>
</html>