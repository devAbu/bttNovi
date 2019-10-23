<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=euc-kr">

    <meta property="og:site_name" content="BTT - Bosnian Tourist Travel">
    <meta property="og:title" content="BTT - Bosnian Tourist Travel">
    <meta property="og:image" content="https://bttbh.ba/images/btt%20logo%20png.png">
    <meta name="og:url" content="https://www.bttbh.ba">
    <meta name="og:description" content="Bosnian Tourist Travel offers the best tour plans and the best hotels in B&H.">

    <meta property="article:section" content="Tourist agency">

    <meta itemprop="name" content="BTT - Bosnian Tourist Travel">
    <meta itemprop="description" content="Bosnian Tourist Travel offers the best tour plans and the best hotels in B&H.">
    <meta itemprop="image" content="https://bttbh.ba/image/btt%20logo%20png.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <meta name="image" content="https://bttbh.ba/image/btt%20logo%20png.png">
    <title>BTT</title>
    <link rel="icon" type="image/ico" href="images/btt_logo_icon.ico" />
    <meta name="author" content="BTT">
    <meta name="keywords" content="btt, bttbh, tourist, travel, agency, arabic, bosna, bosnia, tourism in bosnia and herzegovina">
    <meta name="description" content="Bosnian Tourist Travel offers the best tour plans and the best hotels in B&H. ">

    <META NAME="subject" CONTENT="Tourist agency">
    <META NAME="Copyright" CONTENT="BTT">
    <META NAME="Designer" CONTENT="BTT">
    <META NAME="Publisher" CONTENT="BTT">
    <META NAME="distribution" CONTENT="Global">
    <META NAME="zipcode" CONTENT="71000">
    <META NAME="city" CONTENT="Sarajevo">
    <META NAME="country" CONTENT="Bosnia & Herzegovina">
    <meta name="format-detection" content="telephone=yes" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
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


    <div id="navbarInclude" class="hidden"></div>

    <section id="jumbotron" class=" jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center hidden">
            <h1 class="display-1 text-primary text-uppercase">BTT</h1>
            <p class="display-4 d-none d-sm-block mb-5">Bosnian Tourist Travel</p>
            <p class="lead mt-5 mb-3">Visit Bosnia & Herzegovina with us!</p>
            <p class="lead ml-4">The best offers and price!</p>
            <p class="text-primary h5 mb-3 ml-4">Visit us on:</p>
            <a href="https://www.instagram.com/bosnian_tourist_travel/" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com/tourAgencyBTT/" class="btn btn-lg btn-primary mb-1 ml-0 ml-sm-3 ">
                <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
            <div>
                <a href="tourPlans.php" class="text-warning" style="text-decoration: none;">
                    <i class="fas fa-suitcase fa-3x mr-3 mt-md-4 mt-2"></i><span id="indexTour">Choose a tour</span>
                </a>
            </div>
        </div>
    </section>

    <section class="hidden">
        <!--TODO: iz baze slike-->
        <h2 class="display-4 text-center text-primary">BTT</h2>
        <p class="text-center h4 text-primary mb-5">The beauty of Bosnia & Herzegovina</p>
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1" class=""></li>
                <li data-target="#carousel" data-slide-to="2" class=""></li>
                <li data-target="#carousel" data-slide-to="3" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="images/slideshow1.jpg" alt="slide1" class="d-block img-fluid vh">
                    <div class="carousel-caption">
                        <h3 class="display-4">Mostar</h3>
                        <p>Kravica Waterfall</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slideshow2.jpg" alt="slide2" class="d-block img-fluid vh">
                    <div class="carousel-caption">
                        <h3 class="display-4">Goražde </h3>
                        <p>Osanica River</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slideshow3.jpg" alt="slide3" class="d-block img-fluid vh">
                    <div class="carousel-caption">
                        <h3 class="display-4">Trnovo</h3>
                        <p>Trnovačko Lake</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slideshow4.jpg" alt="slide4" class="d-block img-fluid vh">
                    <div class="carousel-caption">
                        <h3 class="display-4">Bihać</h3>
                        <p>Una River</p>
                    </div>
                </div>
            </div>
            <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Preview</span>
            </a>
            <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="hidden">
        <div class="col-12 mt-3">
            <h2 class="text-primary">The best packages' offers</h3>
        </div>
        <?php
        require 'connection/connect.php';

        $sql = "SELECT * FROM tourplan limit 3";
        $result = $dbc->query($sql);

        $count = $result->num_rows;
        if ($count > 0) {
            echo '
    <div class="card-group mt-3">';
            $i = 0;
            while ($row = $result->fetch_assoc()) {
                $i++;
                echo '
        <div class="card ml-2" style="border-radius:2% !important;" id="prva' . $i . '" class="" >
            <a href="tourPlans.php" style="text-decoration: none;">
                <!--<a href="tourPlans.php">-->
                    <img class="card-img-top img-fluid index " src="' . $row["img"] . '" style="border-radius:2% !important; height: 250px;" alt="' . $row["title"] . '">
                <!--</a>-->
                <div class="card-body">
                    <!--<a href="tourPlans.php" class="text-primary">-->
                        <p class="card-text"  style="color:#007BFF !important">' . $row["description"] . '</p>
                    <!--</a>-->
                    <h5 class="card-title text-primary text-right mr-4 mt-4">' . $row["price"] . '
                        <i class="fas fa-euro-sign ml-1"></i>
                    </h5>
                </div>
                <div class="card-footer">
                    <span class="text-muted">
                        <i class="far fa-clock mr-3"></i> Tour length: ' . $row["days"] . '</span>
                </div>
                </a>
            </div>';
            }
            echo '</div>';
        } else {
            echo " 0 results";
        }
        $dbc->close();
        ?>

        <script>
            $('#prva1').hover(function() {
                console.log('prva')
                $('#prva1').addClass('prva1')
                $('#prva2').addClass("prva2")
            })
            $('#prva1').mouseleave(function() {
                console.log('prva out')
                $('#prva1').removeClass('prva1')
                $('#prva2').removeClass("prva2")
                $('#prva2').removeClass('prva1')
                $('#prva1').removeClass("prva2")
                $('#prva3').removeClass('prva1')
                $('#prva3').removeClass("prva2")
            });
            $('#prva2').hover(function() {
                console.log('druga')
                $('#prva2').addClass('prva1')
                $('#prva3').addClass("prva2")
            })
            $('#prva2').mouseleave(function() {
                console.log('druga out')
                $('#prva1').removeClass('prva1')
                $('#prva2').removeClass("prva2")
                $('#prva2').removeClass('prva1')
                $('#prva1').removeClass("prva2")
                $('#prva3').removeClass('prva1')
                $('#prva3').removeClass("prva2")

            });
            $('#prva3').hover(function() {
                console.log('treca')
                $('#prva3').addClass('prva1')
                $('#prva2').addClass("prva2")
            })
            $('#prva3').mouseleave(function() {
                console.log('treca out')
                $('#prva1').removeClass('prva1')
                $('#prva2').removeClass("prva2")
                $('#prva2').removeClass('prva1')
                $('#prva1').removeClass("prva2")
                $('#prva3').removeClass('prva1')
                $('#prva3').removeClass("prva2")
            });
        </script>


    </section>

    <!--TODO: podaci iz baze-->
    <div class="row no-gutters">
        <div class="col-md-5 col-11 col-sm-12 ml-md-5 mt-4 hidden">
            <h2 class="text-info text-center offset-1 offset-md-0">Bosnia & Herzegovina</h2>
            <p class="h4 text-primary mb-3 text-center">Our best places</p>
            <div id="carousel3" class="carousel slide offset-1 offset-md-0 " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel3" data-slide-to="0" class=""></li>
                    <li data-target="#carousel3" data-slide-to="1" class="active"></li>
                    <li data-target="#carousel3" data-slide-to="2" class=""></li>
                    <li data-target="#carousel3" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner " role="listbox">
                    <div class="carousel-item">
                        <a href="bestPlaces.php">
                            <img src="images/konjic.jpg" alt="slide1" style="border-radius:5%;" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="bestPlaces.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Konjic</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="bestPlaces.php">
                            <img src="images/mostar.jpg" alt="slide2" class="d-block img-fluid index2" style="border-radius:5%;" />
                        </a>
                        <div class="carousel-caption">
                            <a href="bestPlaces.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Mostar</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="bestPlaces.php">
                            <img src="images/bjelasnica.jpg" alt="slide3" style="border-radius:5%;" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="bestPlaces.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Bjelašnica</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <a href="bestPlaces.php">
                            <img src="images/sebilj.jpg" alt="slide4" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="bestPlaces.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Sarajevo</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--TODO: podaci iz baze-->
        <div class="col-md-5 col-10 col-sm-12 mt-4 hidden offset-1" id="carouselHotel">
            <h2 class="text-info text-center">Bosnia & Herzegovina</h2>
            <p class="h4 text-primary mb-3 text-center">The best hotels in Sarajevo</p>
            <div id="carousel2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel2" data-slide-to="0" class=""></li>
                    <li data-target="#carousel2" data-slide-to="1" class=""></li>
                    <li data-target="#carousel2" data-slide-to="2" class="active"></li>
                    <li data-target="#carousel2" data-slide-to="3" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item" style="border-radius:5%;">
                        <a href="hotel.php">
                            <img src="images/krone.jpg" alt="slide1" style="border-radius:5%;" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="hotel.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Krone Hotel</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item" style="border-radius:5%;">
                        <a href="hotel.php">
                            <img src="images/scc.jpg" alt="slide2" style="border-radius:5%;" class="d-block img-fluid index2">
                        </a>
                        <div class="carousel-caption">
                            <a href="hotel.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Al Shidi - SCC Hotel</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item active" style="border-radius:5%;">
                        <a href="hotel.php">
                            <img src="images/malak.jpg" alt="slide3" style="border-radius:5%;" class="d-block img-fluid index2 ">
                        </a>
                        <div class="carousel-caption">
                            <a href="hotel.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Malak Hotel</h3>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item" style="border-radius:5%;">
                        <a href="hotel.php">
                            <img src="images/mariot.jpg" alt="slide4" style="border-radius:5%;" class="d-block img-fluid index2 ">
                        </a>
                        <div class="carousel-caption">
                            <a href="hotel.php" style="text-decoration:none !important;">
                                <h3 class="display-4 text-warning">Marriott Hotel</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section class="mt-4 hidden">
        <div class="row no-gutters">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="card" id="why" style="height:180px;">
                    <div class="card-body">
                        <h3 class="card-title text-white text-center " style="margin-top:50px; font-size:37px;">WHY BTT?</h3>
                        <!-- TODO: combe da izmisli nesto bolje-->
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" style="padding-right:0px !important; padding-left:0px; ">
                <div class="card">
                    <div class="card-body why-2 text-white text-center" style="height:180px;">
                        <i class="fas fa-thumbs-up fa-3x mb-3 text-primary"></i>
                        <h5 class="card-title">SATISFIED GUESTS</h5>
                        <p class="card-text">Far away from mass tourism.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" style="padding-right:0px !important; padding-left:0px;">
                <div class="card">
                    <div class="card-body why-2 text-white text-center" style="height:180px;">
                        <i class="fab fa-envira fa-3x mb-3 text-success"></i>
                        <h5 class="card-title">PEACEFUL ENVIRONMENT</h5>
                        <p class="card-text">Your vacation is guaranteed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12" style="padding-right:0px !important; padding-left:0px;">
                <div class="card">
                    <div class="card-body why-2 text-white text-center" style="height:180px;">
                        <i class="fas fa-certificate fa-3x mb-3 text-warning"></i>
                        <h5 class="card-title">BTT ADVENTURE</h5>
                        <p class="card-text">For a more positive view of the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="footerInclude" class="hidden"></div>

    <script>
        $("body > *").not("body > .loader").addClass('hidden');
        $('body').css('background-color', '#d1d1d1')
        $(window).on("load", function() {
            $(document).ready(function() {

                $('body').css('background-color', '')
                $('.hidden').removeClass('hidden')
                $('#jumbotron').addClass('jumbotron')
                $('.loader').hide()

            })
        });
    </script>

    <script src="loaders.css.js "></script>


</body>

</html>