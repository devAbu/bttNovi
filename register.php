<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <title>BTT</title>
    <link rel="icon" type="image/ico" href="images/btt_logo_icon.ico" />
    <meta name="author" content="abu">
    <meta name="keywords" content="btt, bosnian, tourist, travel, agency, arabic, bosna">
    <meta name="description" content="BTT - Bosnian Toursit Travel offers the best tour plans and the best hotels in B&H. ">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="jquery.validate.js"></script>
    <link rel="stylesheet" href="loaders.min.css" />

</head>

<body>

    <div class="loader">
        <div class="loader-inner ball-scale-multiple">
        </div>
    </div>

    <nav class="navbar navbar-dark  navbar-expand-sm fixed-top" style="opacity:1; font-size:18px; background-color:#9aa6af;">
        <a href="index.php" class="navbar-brand"><img src="images/btt logo png.png" alt="logo" class="img-fluid mr-3" width="45" height="45" /><span class="h4">BTT</span></a>
        <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expended="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" id="navScrollspy">
                <li class="nav-item">
                    <a href="index.php" class="nav-link"><i class="fas fa-home mr-2"></i>Home</a>
                </li>
                <!--<li class="nav-item">
                    <a href="aboutUs.php" class="nav-link"><i class="fas fa-users mr-2"></i>About Us</a>
                </li>-->
                <li class="nav-item">
                    <a href="tourPlans.php" class="nav-link"><i class="fas fa-suitcase mr-2"></i>Tour plans</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="bg">
        <div>
            <form name="regForm" id="regForm">
                <div class="card" style=" margin-top:-30px;background:none !important; border:none;">
                    <div class="card-body text-center">
                        <img class="card-img-top" src="images/btt logo png.png" style="width:150px !important; margin-top:150px !important; " height="150" alt="Card image cap">
                        <h3 class="card-title text-uppercase text-primary">Create free account</h3>
                    </div>
                    <ul class="list-group list-group-flush" style="margin-top:-20px;">
                        <div class="col-lg-4 col-md-6 offset-md-4">
                            <li class="list-group-item bg-info" style="background:none !important;">
                                <input type="text" placeholder="First name..." id="firstSign" name="lastSign" class="form-control mb-2" required="" data-msg="Please insert your first name">
                            </li>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-4">
                            <li class="list-group-item bg-info" style="border:none; margin-top:-20px; background:none !important;">
                                <input type="text" placeholder="Last name..." id="lastSign" name="lastSign" class="form-control mb-2" required="" data-msg="Please insert your last name">
                            </li>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-4">
                            <li class="list-group-item bg-info" style="border:none; margin-top:-20px; background:none !important;">
                                <input type="email" placeholder="you@example.com" id="emailSign" name="emailSign" class="form-control " required="" data-msg-required="Please insert your email address" data-msg-email="Please insert validate email">
                            </li>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-4">
                            <li class="list-group-item bg-info" style="border:none; margin-top:-10px; background:none !important;">
                                <input type="number" placeholder="00971555555555" id="numSign" name="numSign" class="form-control" required data-msg-required="Please enter your phone number!!!" data-msg-maxlength="Max number is 15!!!" pattern="\d*" onKeyPress="if(this.value.length==15) return false;">
                            </li>
                        </div>
                        <div class="col-lg-4 col-md-6 offset-md-4">
                            <li class="list-group-item bg-info" style="background:none !important; margin-top:-10px;">
                                <div class="pass">
                                    <input type="password" placeholder="Password..." class="form-control" name="passSign" id="passSign" required data-msg="Please enter your password!!!">
                                    <i class="far fa-eye passIcon" id="passIcon"></i>
                                </div>
                            </li>
                        </div>
                    </ul>
                    <div style="margin-top:-10px;">
                        <ul class="list-group list-group-flush">
                            <div class="offset-lg-4 offset-sm-4 col-2">
                                <li class="list-group-item bg-info" style="background:none !important;">
                                    <a href="login.php" class="badge text-white" style="text-decoration:none;"><span style="font-size:13px;">Already has account?</span></a>
                                </li>
                            </div>
                        </ul>
                    </div>

                    <div class="card-body text-center">
                        <button type="button" class="btn btn-primary text-white" id="signButton" name="signButton">Sign up for free<i class="fas fa-user-plus ml-2"></i></button>
                        <div class="col-2 offset-md-4">
                            <div class="alert mt-3 ml-3" id="alert" style="width:400px;"></div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
        <div class="text-center text-dark">
            <p style="font-size:20px; margin-bottom:0px;">Copyright &copy; 2018 Abdurahman Almonajed</p>
        </div>
    </div>

    <script>
        $('#signButton').prop('disabled', true);
        $('#signButton').css('cursor', 'not-allowed');

        jQuery(document).ready(function($) {
            console.log('juhu')
            $('#regForm').validate();

            function checkForm(currentInput) {
                if (currentInput.valid() == true) {
                    if ($('#regForm').validate().checkForm()) {
                        $('#signButton').prop('disabled', false);
                        $('#signButton').css('cursor', '');
                    } else {
                        $('#signButton').prop('disabled', true);
                        $('#signButton').css('cursor', 'not-allowed');
                    }
                } else {
                    $('#signButton').prop('disabled', true);
                    $('#signButton').css('cursor', 'not-allowed');
                }
            }
            $('#regForm input').on('blur change keyup', function(e) {
                checkForm($(this));
                if (e.keyCode == 13) {
                    $('#signButton').trigger('click');
                }
            });

            $('#passIcon').click(function() {
                var elementType = $('#passSign').attr('type');
                console.log(elementType);
                if (elementType == "text") {
                    $('#passSign').attr('type', 'password');
                    $('#passIcon').removeClass('fa-eye-slash');
                    $('#passIcon').addClass('fa-eye');
                } else if (elementType == "password") {
                    $('#passSign').attr('type', 'text');
                    $('#passIcon').removeClass('fa-eye');
                    $('#passIcon').addClass('fa-eye-slash');
                }
            });
        })
    </script>

    <script>
        $("body > *").not("body > .loader").addClass('hidden');
        $('body').css('background-color', '#d1d1d1')
        $(window).on("load", function() {
            $(document).ready(function() {
                $('body').css('background-color', '')
                $('.hidden').removeClass('hidden')
                /* $('.bg').attr('id', 'jumbotronFeedback') */
                $('.loader').hide()
            })
        });
    </script>

    <script src="loaders.css.js "></script>

    <script src="loginRegister/sign.js"></script>

</body>

</html>