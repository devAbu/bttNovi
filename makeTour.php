<!--TODO: prave cijene ubacit --COMBE-- -->
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
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

    <link href="toastr.css" rel="stylesheet" />
    <script src="toastr.js"></script>

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


    <section id="jumbotron" class=" jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center hidden">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block">Bosnian Tourist Travel</p>
            <p class="lead">Visit Bosnia & Herzegovina with us!</p>
            <p class="lead">The best offers and price!</p>
            <p class="text-primary h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/bosnian_tourist_travel/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com/tourAgencyBTT/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
            <div class="align-text-bottom">
                <a href="#res" id="downArrow"><i class="fas fa-chevron-down fa-7x" id="test" style="color: #007BFF;"></i></a>
            </div>
        </div>
    </section>

    <script>
        $('#downArrow').click(function() {
            event.preventDefault();
            var sectionTo = $(this).attr('href');
            $('html').animate({
                scrollTop: $(sectionTo).offset().top - 60
            }, 1000);
        });
    </script>

    <div class="modal fade" id="otherOffers" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalCenterTitle">Do you want reserve other offers?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-12 mt-2 mt-md-0" style="padding-right:0px !important;">
                                <a href="apartment.php">
                                    <button class="btn btn-lg btn-primary" style="width:100%"><i class="far fa-building mr-2"></i>Apartment</button>
                                </a>
                            </div>
                            <div class="col-md-4 col-12 mt-2 mt-md-0" style="padding-right:0px !important;">
                                <a href="hotel.php">
                                    <button class="btn btn-lg btn-primary" style="width:100%; "><i class="fas fa-bed mr-2"></i>Hotel</button>
                                </a>
                            </div>

                            <div class="col-md-4 col-12 mt-2 mt-md-0" style="padding-right:0px !important;">
                                <a href="rent.php">
                                    <button class="btn btn-lg btn-primary" style="width:100%"> <i class="fas fa-car mr-2"></i>Car</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-light text-primary" data-dismiss="modal">Close <i class="fas fa-times ml-1"></i></button>
                </div>
            </div>
        </div>
    </div>



    <section id="res">
        <?php
        if (isset($_SESSION["email"])) {
            echo '<div class="row col-12" >
                <div class="offset-1 col-10 col-md-5 col-lg-4 col-sm-9 offset-sm-3 offset-md-1" >
                    <h4 class="text-primary mt-4">City:</h4>
                        <div class="form-check form-check-inline col-12 ">
                            <label for="sarajevo" class="col-2 col-form-label">Sarajevo</label>
                            <div class="col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="sarajevo" onclick="price()" name="sarajevo" type="checkbox">
                            </div>
                            <label for="mostar" class="col-2 col-form-label">Mostar</label>
                            <div class="col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check " id="mostar" name="mostar" onclick="price()" type="checkbox">
                            </div>
                            <label for="jajce" class="col-2 col-form-label">Jajce</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="jajce" name="jajce" onclick="price()" type="checkbox">
                            </div>
                        </div>
                        <div class="form-check form-check-inline col-12">
                            
                            <label for="konjic" class="col-2 col-form-label">Konjic</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="konjic" name="konjic" onclick="price()" type="checkbox">
                            </div>
                            
                            <label for="trebevic" class="col-2 col-form-label">Trebevic</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="trebevic" name="trebevic" onclick="price()" type="checkbox">
                            </div>
                            <label for="igman" class="col-2 col-form-label">Igman</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="igman" name="igman" onclick="price()" type="checkbox">
                            </div>
                        </div>
                        <div class="form-check form-check-inline col-12">
                            
                            <label for="jahorina" class="col-2 col-form-label">Jahorina</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="jahorina" onclick="price()" name="jahorina" type="checkbox">
                            </div>
                            <label for="bjelasnica" class=" col-2 col-form-label">Bjelasnica</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check " id="bjelasnica" name="bjelasnica" onclick="price()" type="checkbox">
                            </div>
                        </div>
                        <div class="col-10 col-sm-8 col-md-10">
                            <input type="text" class="form-control mt-2" id="other" onchange="price()" name="other" placeholder="Other..." onkeydown="preventNumberInput(event)"
               onkeyup="preventNumberInput(event)"/>
                        </div>
                    
                </div>
                <div class="col-12 offset-1 mr-md-5 mr-lg-0 col-md-5 col-lg-3 col-sm-5 ml-lg-2 offset-sm-3 offset-md-0 mt-sm-3 mt-md-0">
                    <div class="row">
                        <!-- <div class="col-sm-12 col-10">
                            <h4 class="text-primary">Budget:</h4>
                            <div class="input-group ml-3">
                                <span class="input-group-addon">$</span>
                                <input type="number" id="budget" onchange="price()" name="budget" value="0" min="0" step="10"  max="8999" class="form-control currency"
                                />
                            </div>
                        </div>-->
                        <div class="col-sm-12 col-10 mt-4">
                            <h4 class="text-primary">No. of people:</h4>
                            <label class="text-dark ml-3" for="people"><strong>Adults: </strong></label>
                            <input type="number" id="people" onchange="price()" name="people" value="0" min="0" step="1" max="15" class="form-control ml-3 mt-1"/> 
                            <label class="text-dark ml-3 mt-2" for="child"><strong>Child: </strong></label>
                            <input type="number" id="child" onchange="price()" name="child" value="0" min="0" step="1" max="15" class="form-control ml-3 mt-1"/>
                        </div>
                    </div>
                </div>
                <div class="col-10 offset-1 col-md-5 offset-md-1 col-lg-3 offset-lg-0 ml-lg-5 col-sm-5 offset-sm-3" id="priceField">
                    <div class="row">
                        <div class="col-12">
                        
                            <h4 class="text-primary mt-4">Driver:</h4>

                            <input type="radio"  id="driverYes" onclick="price()" name="driver" class="ml-3" />Yes
                            <input type="radio" id="driverNo" onclick="price()" name="driver" class="ml-3" />No

                            
                        </div>
                    </div>
                </div>

               

                <!--<div class="col-10 offset-1 offset-lg-1 col-md-5 col-sm-5 col-lg-3 mt-4 mb-3 offset-sm-3 offset-md-0">
                    <h4 class="text-primary">Tour Length (days):</h4>

                    <input type="number" id="length"  name="length" value="0" min="0" max="30" step="1" class="form-control ml-3" onchange="price()"
                    />
                </div>-->
                
                <div class=" col-10 offset-1 mt-4 col-md-5 offset-md-1 col-sm-5 offset-sm-1 col-lg-4 offset-lg-1 offset-sm-3">
                    <h4 class="text-primary">Period:</h4>
                    <div class="row ml-2">
                        <div class="col-12">
                            <input type="text" class="form-control arrival" placeholder="Date of arrival" name="arrival" id="arrival"  onchange="price(); date()" style="max-width:80%">
                        </div>
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control departure" placeholder="Date of departure" name="departure" id="departure" onchange="price(); date()" style="max-width:80%">
                        </div>
                        <input type="text" id="active" hidden>
                    </div>
                </div>
                <div class="col-10 col-sm-5 offset-1  offset-md-0 col-md-5  offset-sm-3 col-lg-3 mt-4">
                    <!--<h4 class="text-primary">Interpreter:</h4>

                    <input type="radio"  id="yes" onclick="price()" name="interpreter" class="ml-3" />Yes
                    <input type="radio" id="no" onclick="price()" name="interpreter" class="ml-3" />No
                    -->
                     <h4 class="text-primary ml-0 ml-lg-2">Price:</h4>
                            <div class="input-group ml-lg-4 ml-sm-3 ml-0" id="priceInput">
                                <span class="input-group-addon">$</span>
                                <input type="number" value="0" id="price" name="price" readonly data-number-to-fixed="2" style="height:50px;" class="form-control currency"
                                />
                            </div>
                     
                </div>
                <div class="col-8 mt-4 offset-md-4 offset-sm-3 offset-0" >
                    <button class="btn btn-lg btn-primary" style="width: 315px;" id="send" name="send"> Send request</button>
                </div>
                
            </div>
             <div class="alertReq mt-2" id="alertReq" style="height:45px" ></div>
           
        ';
        } else {
            echo '<div class="row col-12" >
                <div class="offset-1 col-10 col-md-5 col-lg-4 col-sm-9 offset-sm-3 offset-md-1" >
                    <h4 class="text-primary mt-4">City:</h4>
                        <div class="form-check form-check-inline col-12 ">
                            <label for="sarajevo" class="col-2 col-form-label">Sarajevo</label>
                            <div class="col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="sarajevo" onclick="price()" name="sarajevo" type="checkbox" disabled>
                            </div>
                            <label for="mostar" class="col-2 col-form-label">Mostar</label>
                            <div class="col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check " id="mostar" name="mostar" onclick="price()" type="checkbox" disabled>
                            </div>
                            <label for="jajce" class="col-2 col-form-label">Jajce</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="jajce" name="jajce" onclick="price()" type="checkbox" disabled>
                            </div>
                        </div>
                        <div class="form-check form-check-inline col-12">
                            
                            <label for="konjic" class="col-2 col-form-label">Konjic</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="konjic" name="konjic" onclick="price()" type="checkbox" disabled>
                            </div>
                            
                            <label for="trebevic" class="col-2 col-form-label">Trebevic</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="trebevic" name="trebevic" onclick="price()" type="checkbox" disabled>
                            </div>
                            <label for="igman" class="col-2 col-form-label">Igman</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="igman" name="igman" onclick="price()" type="checkbox" disabled>
                            </div>
                        </div>
                        <div class="form-check form-check-inline col-12">
                            
                            <label for="jahorina" class="col-2 col-form-label">Jahorina</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check" id="jahorina" onclick="price()" name="jahorina" type="checkbox" disabled>
                            </div>
                            <label for="bjelasnica" class=" col-2 col-form-label">Bjelasnica</label>
                            <div class="col-1 col-1 ml-4 ml-sm-2 ml-md-3 ml-lg-3">
                                <input class="w3-check " id="bjelasnica" name="bjelasnica" onclick="price()" type="checkbox" disabled>
                            </div>
                        </div>
                        <div class="col-10 col-sm-8 col-md-10">
                            <input type="text" class="form-control mt-2" id="other" onchange="price()" name="other" placeholder="Other..." onkeydown="preventNumberInput(event)"
               onkeyup="preventNumberInput(event)" disabled/>
                        </div>
                    
                </div>
                <div class="col-12 offset-1 mr-md-5 mr-lg-0 col-md-5 col-lg-3 col-sm-5 ml-lg-2 offset-sm-3 offset-md-0 mt-sm-3 mt-md-0">
                    <div class="row">
                        <!-- <div class="col-sm-12 col-10">
                            <h4 class="text-primary">Budget:</h4>
                            <div class="input-group ml-3">
                                <span class="input-group-addon">$</span>
                                <input type="number" id="budget" onchange="price()" name="budget" value="0" min="0" step="10"  max="8999" class="form-control currency" disabled
                                />
                            </div>
                        </div>-->
                        <div class="col-sm-12 col-10 mt-4">
                            <h4 class="text-primary">No. of people:</h4>
                            <label class="text-dark ml-3" for="people"><strong>Adults: </strong></label>
                            <input type="number" id="people" onchange="price()" name="people" value="0" min="0" step="1" max="15" class="form-control ml-3 mt-1" disabled/> 
                            <label class="text-dark ml-3 mt-2" for="child"><strong>Child: </strong></label>
                            <input type="number" id="child" onchange="price()" name="child" value="0" min="0" step="1" max="15" class="form-control ml-3 mt-1" disabled/>
                        </div>
                    </div>
                </div>
                <div class="col-10 offset-1 col-md-5 offset-md-1 col-lg-3 offset-lg-0 ml-lg-5 col-sm-5 offset-sm-3" id="priceField">
                    <div class="row">
                        <div class="col-12">
                        
                            <h4 class="text-primary mt-4">Driver:</h4>

                            <input type="radio"  id="driverYes" onclick="price()" name="driver" class="ml-3" disabled/>Yes
                            <input type="radio" id="driverNo" onclick="price()" name="driver" class="ml-3" disabled/>No

                            
                        </div>
                    </div>
                </div>

               

                <!--<div class="col-10 offset-1 offset-lg-1 col-md-5 col-sm-5 col-lg-3 mt-4 mb-3 offset-sm-3 offset-md-0">
                    <h4 class="text-primary">Tour Length (days):</h4>

                    <input type="number" id="length"  name="length" value="0" min="0" max="30" step="1" class="form-control ml-3" onchange="price()" disabled />
                </div>-->
                
                <div class=" col-10 offset-1 mt-4 col-md-5 offset-md-1 col-sm-5 offset-sm-1 col-lg-4 offset-lg-1 offset-sm-3">
                    <h4 class="text-primary">Period:</h4>
                    <div class="row ml-2">
                        <div class="col-12">
                            <input type="text" class="form-control arrival" placeholder="Date of arrival" name="arrival" id="arrival"  onchange="price(); date()" style="max-width:80%" disabled>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control departure" placeholder="Date of departure" name="departure" id="departure" onchange="price(); date()" style="max-width:80%" disabled>
                        </div>
                        <input type="text" id="active" hidden>
                    </div>
                </div>
                <div class="col-10 col-sm-5 offset-1  offset-md-0 col-md-5  offset-sm-3 col-lg-3 mt-4">
                    <!--<h4 class="text-primary">Interpreter:</h4>

                    <input type="radio"  id="yes" onclick="price()" name="interpreter" class="ml-3" />Yes
                    <input type="radio" id="no" onclick="price()" name="interpreter" class="ml-3" />No
                    -->
                     <h4 class="text-primary ml-0 ml-lg-2">Price:</h4>
                            <div class="input-group ml-lg-4 ml-sm-3 ml-0" id="priceInput">
                                <span class="input-group-addon">$</span>
                                <input type="number" value="0" id="price" name="price" readonly data-number-to-fixed="2" style="height:50px;" class="form-control currency"
                                />
                            </div>
                     
                </div>
                <div class="col-8 mt-4 offset-md-4 offset-sm-3 offset-0" >
                    <a href="login.php">
                    <button class="btn btn-lg btn-primary" style="width: 315px;" id="loginReq" name="loginReq"> Login</button>
                    </a>
                </div>
                
            </div>
        ';
            /*echo "<div class='offset-sm-1 text-center mt-5 mb-5'><a href='#' data-toggle='modal' data-target='#LoginModal'><span class='text-warning' style='font-size: 20px;'>LOGIN</span></a> to be able to make tour request!!!</div>";*/
        }
        ?>
    </section>



    <div id="footerInclude" class="mt-3"></div>

    <script>
        $(function() {
            var otherPlaces = [
                "Zenica",
                "Travnik",
                "Kravice"
            ];

            $("#other").autocomplete({
                source: otherPlaces

            });
        });

        function preventNumberInput(e) {
            var keyCode = (e.keyCode ? e.keyCode : e.which);
            if (keyCode > 47 && keyCode < 58 || keyCode > 95 && keyCode < 107) {
                e.preventDefault();
            }
        }
    </script>
    <script>
        $('#alertReq').fadeOut();
        $('#dialog').hide();
        $('#send').click(function() {
            $("#alertReq").removeClass('alert-success').removeClass('alert-danger');

            var sarajevo = $('#sarajevo').is(':checked');
            var mostar = $('#mostar').is(':checked');
            var jajce = $('#jajce').is(':checked');
            var konjic = $('#konjic').is(':checked');
            var bjelasnica = $('#bjelasnica').is(':checked');
            var trebevic = $('#trebevic').is(':checked');
            var igman = $('#igman').is(':checked');
            var jahorina = $('#jahorina').is(':checked');
            var other = $('#other').val();
            var session = $('#session').val();
            var active = $('#active').val();
            var arrival = $('#arrival').val();
            var departure = $('#departure').val();

            var check = "";

            var checked = 0;

            if (sarajevo == true) {
                checked += 1;
                check += "sarajevo,"
                console.log(check);
            }
            if (mostar == true) {
                checked += 1;
                check += "mostar,"
                console.log(check);
            }
            if (jajce == true) {
                checked += 1;
                check += "jajce,"
                console.log(check);
            }
            if (konjic == true) {
                checked += 1;
                check += "konjic,"
                console.log(check);
            }
            if (bjelasnica == true) {
                checked += 1;
                check += "bjelasnica,"
                console.log(check);
            }
            if (trebevic == true) {
                checked += 1;
                check += "trebevic,"
                console.log(check);
            }
            if (igman == true) {
                checked += 1;
                check += "igman,"
                console.log(check);
            }
            if (jahorina == true) {
                checked += 1;
                check += "jahorina,"
                console.log(check);
            }
            if (other == "Zenica") {
                checked += 1;
                check += "Zenica,"
                console.log(check);
            } else if (other == "Kravice") {
                checked += 1;
                check += "Kravice,"
                console.log(check);
            } else if (other == "Travnik") {
                checked += 1;
                check += "Travnik,"
                console.log(check);
            }
            console.log(other);

            check += other
            console.log(check)

            console.log(checked);

            var people = $('#people').val();

            var child = $('#child').val();


            var price = $('#price').val();

            //var length = $('#length').val();


            var driverYes = $('#driverYes').is(':checked');
            var driverNo = $('#driverNo').is(':checked');

            var checkDriver = "";

            if (driverYes == true) {
                checkDriver += "yes"
                console.log(checkDriver);
            } else if (driverNo == true) {
                checkDriver += "no"
                console.log(checkDriver);
            }


            if (sarajevo == false && mostar == false && jajce == false && konjic == false && bjelasnica == false && trebevic == false && igman == false && jahorina == false && other == "") {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please select at least 1 (one) place you want to visit!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if (checked > 5) {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("You can choose at the most 5 (five) cities!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if (people == 0 && child == 0 || people == "" && child == 0) {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please enter how many people will be!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            }
            /*else if (length == 0 || length == "") {
                           $("#alertReq").addClass('alert-danger');
                           $("#alertReq").html("Please enter the tour's length!!!");
                           $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
                       }*/
            else if (active == "" || active == "0") {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please select a date!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else if (driverYes == false && driverNo == false) {
                $("#alertReq").addClass('alert-danger');
                $("#alertReq").html("Please select if you need driver or not!!!");
                $("#alertReq").fadeIn(500).delay(1000).fadeOut(500);
            } else {
                $.ajax({
                    url: "dbSend/makeRequest.php?task=request&check=" + check + "&people=" + people + "&child=" + child + "&arrival=" + arrival + "&departure=" + departure + "&price=" + price + "&session=" + session + "&checkDriver=" + checkDriver,
                    //&length="+length+"
                    success: function(data) {
                        if (data.indexOf('sent') > -1) {
                            $("#alertReq").addClass('alert-success');
                            $("#alertReq").html('Request sent!!!');
                            $("#alertReq").slideDown(500).delay(1000).slideUp(500);
                            /*  window.location = "http://localhost/github/btt/phpSendEmailForRequestTour?session=" + session + "&price=" + price */
                            jQuery.noConflict();
                            setTimeout(function() {
                                $('#otherOffers').modal('show');
                            }, 1500);

                            $('#other').val("");
                            //$('#length').val("");
                            /* $('#budget').val(""); */
                            $('#people').val("");
                            $('#price').val(0);
                            $('#sarajevo').prop('checked', false);
                            $('#jajce').prop('checked', false);
                            $('#mostar').prop('checked', false);
                            $('#igman').prop('checked', false);
                            $('#konjic').prop('checked', false);
                            $('#bjelasnica').prop('checked', false);
                            $('#trebevic').prop('checked', false);
                            $('#igman').prop('checked', false);
                            $('#jahorina').prop('checked', false);
                            $('#driverYes').prop('checked', false);
                            $('#driverNo').prop('checked', false);
                            /* $('#zima').prop('checked', false);
                            $('#proljece').prop('checked', false);
                            $('#jesen').prop('checked', false);
                            $('#ljeto').prop('checked', false); */

                        } else {
                            $("#alertReq").addClass('alert-danger');
                            $("#alertReq").html('Error occured');
                            $("#alertReq").slideDown(500).delay(1000).slideUp(500);
                        }
                    },
                    error: function(data, err) {
                        $("#alertLog").addClass('alert-danger');
                        $("#alertLog").html('Some problem occured. We are sorry.');
                        $("#alertLog").slideDown(500).delay(1000).slideUp(500);
                    }
                })
            }
        });

        function price() {

            var price = 0;

            var sarajevo = document.getElementById("sarajevo").checked;
            var mostar = document.getElementById("mostar").checked;
            var jajce = document.getElementById("jajce").checked;
            var konjic = document.getElementById("konjic").checked;
            var bjelasnica = document.getElementById("bjelasnica").checked;
            var trebevic = document.getElementById("trebevic").checked;
            var igman = document.getElementById("igman").checked;
            var jahorina = document.getElementById("jahorina").checked;
            var other = document.getElementById("other").value;

            if (sarajevo == true) {
                price += 100;
                console.log(price)
            }
            if (mostar == true) {
                price += 250;
            }
            if (jajce == true) {
                price += 150;
            }
            if (konjic == true) {
                price += 150;
            }
            if (bjelasnica == true) {
                price += 125;
            }
            if (trebevic == true) {
                price += 149;
            }
            if (igman == true) {
                price += 120;
            }
            if (jahorina == true) {
                price += 180;
            }
            if (other == "Zenica") {
                price += 120;
            } else if (other == "Kravice") {
                price += 300;
            } else if (other == "Travnik") {
                price += 200;
            } else if (other != "") {
                price += 400
            }


            var people = document.getElementById('people').value;
            if (people != 0) {
                if (people < 5) {
                    price += 200;
                } else if (people < 10) {
                    price += 250;
                } else {
                    price += 350;
                }
            }


            /* var zima = document.getElementById('zima').checked;
            var ljeto = document.getElementById('ljeto').checked;
            var proljece = document.getElementById('proljece').checked;
            var jesen = document.getElementById('jesen').checked;

            if (zima == true) {
                price -= 75;
            }
             if (ljeto == true) {
                price += 100;
            } */

            document.getElementById("price").value = price;

            var driverYes = document.getElementById('driverYes').checked;
            var driverNo = document.getElementById('driverNo').checked;

            if (driverYes == true) {
                price += 100;
                console.log(price)
            }

            const firstDay = $('#arrival').val();
            const lastDay = $('#departure').val();

            console.log(firstDay)
            console.log(lastDay)

            const timeDiff = (new Date(lastDay)) - (new Date(firstDay));
            const days = timeDiff / (1000 * 60 * 60 * 24)
            var daysConverted = days + 1
            console.log(daysConverted)


            /*var length = document.getElementById('length').value;
            if(length != 0) {
                price = price * length
                console.log(price)
                /* if (length < 3) {
                    price += 35;
                } else if (length < 5) {
                    price += 50;
                } else if (length < 8) {
                    price += 75;
                } else {
                    price += 100;
                } 
            }*/
            if (isNaN(daysConverted)) {
                document.getElementById("price").value = price;
                console.log("prazno")
            } else {
                console.log("puno")
                document.getElementById("price").value = price * daysConverted;
            }



        }
    </script>

    <script>
        $("body > *").not("body > .loader").addClass('hidden');
        $('body').css('background-color', '#d1d1d1')
        $(window).on("load", function() {

            $(document).ready(function() {
                $('body').css('background-color', '')
                $('.hidden').removeClass('hidden')
                $('#jumbotron').addClass('jumbotron8')
                $('.loader').hide()

                var currentDate = new Date()
                var month = currentDate.getMonth() + 1;
                var day = currentDate.getDate();

                var date = currentDate.getFullYear() + '-' +
                    (('' + month).length < 2 ? '0' : '') + month + '-' +
                    (('' + day).length < 2 ? '0' : '') + day;
                console.log(date)

                $(".arrival").datepicker({
                    dateFormat: 'yy-mm-dd',
                    minDate: date
                });
                $(".departure").datepicker({
                    dateFormat: 'yy-mm-dd',
                    minDate: date
                });

            })
        });
    </script>

    <script>
        function date() {
            console.log()


            var arrival = $('#arrival').val()
            var departure = $('#departure').val()
            console.log(arrival)
            console.log(departure)
            if (arrival != "" && departure != "") {
                if (arrival >= departure) {
                    toastr.error('Please select valid date!!!')
                    $('#send').attr('disabled', true);
                    $("#active").attr("value", "0")
                } else {
                    $("#active").attr("value", "1")
                    $('#send').attr('disabled', false);
                }
            }

        }
    </script>

    <script src="loaders.css.js "></script>

</body>

</html>