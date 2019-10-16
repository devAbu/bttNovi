<?php
session_start();
?>
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
    <meta name="description" content="BTT - Bosnian Tourist Travel offers the best tour plans and the best hotels in B&H. ">
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="jquery.validate.js"></script>

    <link rel="stylesheet" href="loaders.min.css" />


    <script>
        $(function() {
            $('#navbarInclude').load("./template/navbar.php");
            $('#footerInclude').load("./template/footer.php");
        })
    </script>


</head>

<body>

    <div class="loader">
        <div class="loader-inner ball-scale-multiple">
        </div>
    </div>

    <div id="navbarInclude"></div>

    <section class=" jumbotron-fluid text-white d-flex justify-content-center align-items-center bg">
        <div class="container text-center hidden">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead text-uppercase" style="font-size:26px;">We want your feedback</p>
            <p class="text-primary h5 mb-3">Also, you can leave your feedback on:</p>
            <a href="https://www.instagram.com/bosnian_tourist_travel/" target="_blank" class="btn btn-lg btn-primary mb-1"><i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com/tourAgencyBTT/" target="_blank" class="btn btn-lg btn-primary mb-1"><i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
        </div>
    </section>

    <section>
        <?php
        if (isset($_SESSION["email"])) {
            echo '
        <h2 class="display-4 text-center text-primary mb-5 mt-4">Be free to contact us, we are here to please you.</h2>
        <form id="feedbackForm" name="feedbackForm">
            <p class="text-center h2 mb-5">Tell us what you think!</p>
            <div class="col-md-10 offset-md-2">
                <textarea cols="80" rows="15" class="form-control error" style="max-width:850px;margin-left:50px;resize: none" placeholder="Please write your opinion..." id="feedback" name="feedback" required data-msg="This field is required"></textarea>
            </div>
            <div class="col-lg-6 offset-md-5 offset-4 col-7">
                <input type="button" id="feedbackButton" name="feedbackButton" class="btn btn-lg btn-outline-primary mt-3 ml-md-5 mb-2" value="SEND" />
            </div>
            <div class="alert mt-3" id="alertFeedback"></div>
        </form>';
        } else {
            echo '
        <h2 class="display-4 text-center text-info mb-5 mt-4">Be free to contact us, we are here to please you.</h2>
            <p class="text-center h2 text-primary mb-5">Tell us what you think!</p>
            <div class="col-md-10 offset-md-2 ">
                <textarea cols="80" rows="15" class="form-control error" style="max-width:850px;margin-left:50px;resize: none" placeholder="Please write your opinion..." id="feedback" name="feedback" required data-msg="This field is required"></textarea>
            </div>
            <div class="col-lg-6 offset-md-5 offset-4 col-7">
                <!--<a href="login.php">
                <input type="button" lass="btn btn-lg btn-outline-primary mt-3 ml-md-5 mb-2" value="Login" /></a>-->
                <a href="#" data-toggle="modal" data-target="#feedLogin">
                    <button class="btn btn-lg btn-outline-primary mt-3 ml-md-5 mb-2" id="feedbackLoginButton" name="feedbackLoginButton">
                        <span>Login</span>
                    </button>
                </a>
            </div>
        ';
            /*
        echo "<div><div class='offset-sm-3 offset-0 col-12 col-sm-7 text-center mt-5 mb-5'><a href='#' data-toggle='modal' data-target='#selectLoginModal'><span class='text-warning' style='font-size: 20px;'>LOGIN</span></a> to be able to leave feedback!!!</div></div>";*/
        }
        ?>
    </section>

    <div class="modal fade" id="feedLogin" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleLog">
                        <img src="images/btt logo png.png" class="img-fluid mr-5" width="85" height="85" alt="BTT">
                        <label class="h2 text-primary ml-5">Login</label>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fas fa-times text-dark"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" name="loginForm">
                        <div class="col-12">
                            <input type="email" placeholder="you@example.com" class="form-control" id="selectEmailLog" name="emailLog" required data-msg-required="Please enter your email" data-msg-email="Please enter a valid email address.">
                            <br>
                        </div>
                        <div class="col-12">
                            <div class="pass">
                                <input type="password" placeholder="Password..." class="form-control" name="passLog" id="selectPassLog" required data-msg="Please enter your password!!!">
                                <i class="far fa-eye passIcon2" id="selectPassIcon"></i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7 col-sm-7 col-md-7 col-lg-7">
                                <a href="register.php" class="badge ml-3 text-primary" style="text-decoration:none;">
                                    <span style="font-size:13px;">No account?</span>
                                </a>
                            </div>
                            <div class="col-5 col-sm-5 col-md-5 col-lg-5">
                                <a href="forgotPass.php" class="badge ml-sm-4  text-primary">
                                    <span style="font-size:13px;">Forgot password?</span>
                                </a>
                            </div>
                            <br />
                        </div>
                        <div class="col-xs-12  offset-4 mt-3">
                            <button type="button" id="selectLogButton" name="selectLogButton" class="btn btn-primary">Login
                                <i class="fas fa-sign-in-alt ml-2"></i>
                            </button>
                        </div>
                        <div class="alert mt-3" id="selectAlertLog"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light text-primary" data-dismiss="modal">
                        Close
                        <i class="fas fa-times ml-1"></i>
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script>
        $('#selectLogButton').prop('disabled', true);
        $('#selectLogButton').css('cursor', 'not-allowed');

        jQuery(document).ready(function($) {
            console.log('juhu')
            $('#loginForm').validate();

            function checkForm(currentInput) {
                if (currentInput.valid() == true) {
                    if ($('#loginForm').validate().checkForm()) {
                        $('#selectLogButton').prop('disabled', false);
                        $('#selectLogButton').css('cursor', '');
                    } else {
                        $('#selectLogButton').prop('disabled', true);
                        $('#selectLogButton').css('cursor', 'not-allowed');
                    }
                } else {
                    $('#selectLogButton').prop('disabled', true);
                    $('#selectLogButton').css('cursor', 'not-allowed');
                }
            }
            $('#loginForm input').on('blur change keyup', function(e) {
                checkForm($(this));
                if (e.keyCode == 13) {
                    $('#selectLogButton').trigger('click');
                }
            });

            $('#selectPassIcon').click(function() {
                var elementType = $('#selectPassLog').attr('type');
                console.log(elementType);
                if (elementType == "text") {
                    $('#selectPassLog').attr('type', 'password');
                    $('#selectPassIcon').removeClass('fa-eye-slash');
                    $('#selectPassIcon').addClass('fa-eye');
                } else if (elementType == "password") {
                    $('#selectPassLog').attr('type', 'text');
                    $('#selectPassIcon').removeClass('fa-eye');
                    $('#selectPassIcon').addClass('fa-eye-slash');
                }
            });
        })
    </script>

    <script src="loginRegister/selectLogin.js"></script>


    <script src="feedbackJS/feedback.js"></script>

    <script>
        //TODO: vidjet da se stavi u poseban fajl
        $('#feedbackButton').prop('disabled', true);
        $('#feedbackButton').css('cursor', 'not-allowed');

        jQuery(document).ready(function($) {

            console.log('juhu')
            $('#feedbackForm').validate({
                errorPlacement: function(label, element) {
                    label.insertAfter(element);
                },
                wrapper: 'span'
            });

            function checkForm(currentInput) {
                if (currentInput.valid() == true) {
                    if ($('#feedbackForm').validate().checkForm()) {
                        $('#feedbackButton').prop('disabled', false);
                        $('#feedbackButton').css('cursor', '');
                    } else {
                        $('#feedbackButton').prop('disabled', true);
                        $('#feedbackButton').css('cursor', 'not-allowed');
                    }
                } else {
                    $('#feedbackButton').prop('disabled', true);
                    $('#feedbackButton').css('cursor', 'not-allowed');
                }
            }
            $('#feedbackForm textarea').on('blur change keyup', function(e) {
                checkForm($(this));
                if (e.keyCode == 13) {
                    $('#feedbackButton').trigger('click');
                }
            });


        })
    </script>
    <div id="footerInclude"></div>

    <script>
        $("body > *").not("body > .loader").addClass('hidden');
        $('body').css('background-color', '#d1d1d1')
        $(window).on("load", function() {
            $(document).ready(function() {
                $('body').css('background-color', '')
                $('.hidden').removeClass('hidden')
                $('.bg').attr('id', 'jumbotronFeedback')
                $('.loader').hide()
            })
        });
    </script>

    <script src="loaders.css.js "></script>

</body>

</html>