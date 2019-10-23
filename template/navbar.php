<?php
session_start();
?>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top" id="navbar" style="opacity:0.95; font-size:18px; background-color:#9aa6af;">
    <a href="index.php" class="navbar-brand">
        <img src="images/btt logo png.png" alt="logo" class="img-fluid mr-sm-3 logo" width="45" height="45" />
        <span class="h4">BTT</span>
        <span class="text-warning ml-3">قريبا باللغة العربية</span>
    </a>
    <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expended="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" id="navScrollspy">
            <li class="nav-item">
                <a href="index.php" class="nav-link link">
                    <i class="fas fa-home mr-2"></i>Home</a>
            </li>
            <!--<li class="nav-item">
                    <a href="aboutUs.php" class="nav-link link">
                        <i class="fas fa-users mr-2"></i>About Us</a>
                </li>-->
            <li class="nav-item">
                <a href="tourPlans.php" class="nav-link link">
                    <i class="fas fa-suitcase mr-2"></i>Tour plans</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link link dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-calendar-alt mr-2"></i>Reservation</a>
                <div class="dropdown-menu" style="background-color:#9aa6af; opacity: 0.85">
                    <a class="dropdown-item" href="hotel.php">
                        <i class="fas fa-bed mr-2"></i>Hotel</a>
                    <a class="dropdown-item" href="apartment.php">
                        <i class="far fa-building mr-2"></i>Apartment</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="rent.php" class="nav-link link">
                    <i class="fas fa-car mr-2"></i>Rent-a-car</a>
            </li>
            <li class="nav-item">
                <a href="feedback.php" class="nav-link link">
                    <i class="far fa-smile mr-2"></i>Feedback</a>
            </li>
            <?php
            if (isset($_SESSION['email'])) {
                $session = $_SESSION['email'];
                echo '<li class="nav-item">
                    <a href="myCart.php" class="nav-link link">
                        <i class="fa fa-shopping-cart mr-2"></i>Cart</a>
                </li>';
            }
            ?>
        </ul>
        <?php
        if (isset($_SESSION['email'])) {
            $session = $_SESSION['email'];
            echo "<ul class='navbar-nav ml-auto'><li class='nav-item'><a href='logout.php'  class='nav-link link'><span class='navLinks'><i class='fas fa-sign-in-alt mr-2'></i>Logout</span></a></li></ul><input type='text'  value='$session' hidden id='session' name='session'>";
        } else {
            echo "<ul class='navbar-nav ml-auto'><li class='nav-item'><a href='#' data-toggle='modal' data-target='#SignModal' class='nav-link link'><span class='navLinks'><i class='fa fa-user-plus mr-2'></i>Register</span></a></li><li class='nav-item'><a href='#' data-toggle='modal' data-target='#LoginModal' class='nav-link link'><span class='navLinks'><i class='fas fa-sign-in-alt mr-2'></i>Login</span></a></li></ul>";
        }
        ?>
    </div>
</nav>

<div class="modal fade " id="SignModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true" style="padding: 0px !important">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleSign">
                    <img src="images/btt logo png.png" class="img-fluid mr-5" width="85" height="85" alt="BTT">
                    <label class="h2 text-primary">Create an account</label>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="fas fa-times text-dark"></i>
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <form id="regForm" name="regForm">
                    <div class="col-xs-12">
                        <input type="text" placeholder="Fist name..." id="firstSign" name="firstSign" class="form-control" required data-msg="Please enter your first name!!!">
                        <br>
                    </div>
                    <div class="col-xs-12">
                        <input type="text" placeholder="Last name..." id="lastSign" name="lastSign" class="form-control" required data-msg="Please enter your last name!!!">
                        <br>
                    </div>
                    <div class="col-xs-12">
                        <input type="email" placeholder="you@example.com" id="emailSign" name="emailSign" class="form-control" required data-msg-required="Please enter your email!!!" data-msg-email="Please enter validate email!!!">
                        <br />
                    </div>
                    <div class="col-xs-12">
                        <input type="number" placeholder="00971555555555" id="numSign" name="numSign" class="form-control" required data-msg-required="Please enter your phone number!!!" data-msg-maxlength="Max number is 15!!!" pattern="\d*" onKeyPress="if(this.value.length==15) return false;">
                        <br />
                    </div>
                    <div class="col-xs-12">
                        <div class="pass">
                            <input type="password" placeholder="Password..." class="form-control" name="passSign" id="passSign" required data-msg="Please enter your password!!!">
                            <i class="far fa-eye passIcon" id="passIcon"></i>
                        </div>
                    </div>
                    <div class="col-12 mb-3" style="margin-left:-10px !important;">
                        <a href="login.php" class="text-primary">Already has account?</a>
                    </div>
                    <div class="col-xs-12  offset-4">
                        <button type="button" class="btn btn-primary" id="signButton" name="signButton">Sign up for free
                            <i class="fas fa-user-plus ml-2"></i>
                        </button>
                    </div>
                    <div class="alert mt-3" id="alert"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light text-primary" style="" data-dismiss="modal">
                    Close
                    <i class="fas fa-times ml-1"></i>
                </button>
            </div>
        </div>
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

<script src="./loginRegister/sign.js"></script>

<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
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
                        <input type="email" placeholder="you@example.com" class="form-control" id="emailLog" name="emailLog" required data-msg-required="Please enter your email" data-msg-email="Please enter a valid email address.">
                        <br>
                    </div>
                    <div class="col-12">
                        <div class="pass">
                            <input type="password" placeholder="Password..." class="form-control" name="passLog" id="passLog" required data-msg="Please enter your password!!!">
                            <i class="far fa-eye passIcon2" id="passIcon2"></i>
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
                        <button type="button" id="logButton" name="logButton" class="btn btn-primary">Login
                            <i class="fas fa-sign-in-alt ml-2"></i>
                        </button>
                    </div>
                    <div class="alert mt-3" id="alertLog"></div>
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
    $('#logButton').prop('disabled', true);
    $('#logButton').css('cursor', 'not-allowed');

    jQuery(document).ready(function($) {
        console.log('juhu')
        $('#loginForm').validate();

        function checkForm(currentInput) {
            if (currentInput.valid() == true) {
                if ($('#loginForm').validate().checkForm()) {
                    $('#logButton').prop('disabled', false);
                    $('#logButton').css('cursor', '');
                } else {
                    $('#logButton').prop('disabled', true);
                    $('#logButton').css('cursor', 'not-allowed');
                }
            } else {
                $('#logButton').prop('disabled', true);
                $('#logButton').css('cursor', 'not-allowed');
            }
        }
        $('#loginForm input').on('blur change keyup', function(e) {
            checkForm($(this));
            if (e.keyCode == 13) {
                $('#logButton').trigger('click');
            }
        });

        $('#passIcon2').click(function() {
            var elementType = $('#passLog').attr('type');
            console.log(elementType);
            if (elementType == "text") {
                $('#passLog').attr('type', 'password');
                $('#passIcon2').removeClass('fa-eye-slash');
                $('#passIcon2').addClass('fa-eye');
            } else if (elementType == "password") {
                $('#passLog').attr('type', 'text');
                $('#passIcon2').removeClass('fa-eye');
                $('#passIcon2').addClass('fa-eye-slash');
            }
        });
    })
</script>

<script src="./loginRegister/login.js"></script>

<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {

        var currentScrollPos = window.pageYOffset;

        if (prevScrollpos > currentScrollPos) {
            $('#navbar').css("top", 0)
        } else {
            $('#navbar').css("top", "-160px")
        }
        prevScrollpos = currentScrollPos;

        clearTimeout($.data(this, 'scrollTimer'));
        $.data(this, 'scrollTimer', setTimeout(function() {
            $('#navbar').css("top", 0)
        }, 350));
    }
</script>