<!--TODO: popravit ukupnu cijenu -->
<!--TODO: dodat hotele + racunanje cijena  -->
<!-- TODO: mozda da se uradi odma edit -->
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

    <link href="toastr.css" rel="stylesheet" />
    <script src="toastr.js"></script>


    <script>
        $(function() {
            $('#navbarInclude').load("./template/navbar.php");
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
            <p class="lead text-uppercase" style="font-size:30px; color:gold;">Ready for an unforgettable adventure?</p>
            <p class=" h5 mb-3">Visit us on:</p>
            <a href="https://www.instagram.com/bosnian_tourist_travel/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com/tourAgencyBTT/" target="_blank" class="btn btn-lg btn-primary mb-1">
                <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
        </div>
    </section>
    <section>
        <div class="text-center mt-3">
            <label for="totalPrice" style="font-size:25px; color:gold">Total Price:</label>
            <div class="offset-md-4 col-md-6 col-lg-4 col-10 offset-1 ">
                <div class="input-group ml-3 " id="priceInput">
                    <span class="input-group-addon">$</span>
                    <input type="number" value="0" id="price" name="price" readonly data-number-to-fixed="2" style="height:50px;" class="form-control currency price" />
                </div>
            </div>

            <button id="payButton" class="btn btn-lg btn-primary my-3"><span>Confirm</span></button>
        </div>
        <h2 class="display-4 text-center text-primary">Tour Plans</h2>
        <?php
        require 'connection/connect.php';

        if (isset($_SESSION["email"])) {
            $session = $_SESSION["email"];
            //echo 'session = ' . $session;
            //echo 'length = ' . strlen($session);
            $sql = "Select usertour.tourID,usertour.name, usertour.arrival, usertour.departure, tourplan.ID, tourplan.type, tourplan.title, tourplan.description, tourplan.people, tourplan.available, tourplan.price, tourplan.days, tourplan.img from usertour inner join tourplan on tourplan.ID = usertour.tourID having usertour.name like '%" . trim($session) . "%' ";
            $result = $dbc->query($sql);

            $count = $result->num_rows;
            if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="myContainer"><form action = "delete/deleteTour.php" method = "POST"><div class="card text-center mt-4 ">
            <div class="card-header text-success h3 text-uppercase ">' .
                        $row["type"] . '
            </div>
            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="tourID" id="tourID" hidden>
            <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>
                <!--<a href="# " style="text-decoration:none; ">-->
                    <img src="' . $row["img"] . '" class="img-fluid " alt="skijanje " width="400 " height="250
            " style="float:left; " />
            <!--</a>-->

            <!--<a href="# " style="text-decoration:none; ">-->
                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>
            <!--</a>-->

            <ul class="list-group list-group-flush tourPlans2 " style="width:390px; border:none; ">
                <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-users "></i>
                        <span class="ml-2 ">Max People: ' . $row["people"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Availability: ' . $row["available"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-euro-sign mr-4 "></i> ' . $row["price"] . '</p>
                        <input type="number" readonly value="' . $row["price"] . '" id="tourPrice" hidden>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Arrival: ' . $row["arrival"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Departure: ' . $row["departure"] . '</span>
                    </p>
                </li>
            </ul>
            
            <ul class="navbar-nav ml-auto selectTour" style="float:right; margin-top:-100px;">
                <li class="list-group-item" style="border:none;">
                    <a href="#" data-toggle="modal" data-target="#confirmTour">
                        <input type="button" name="select" id="select" class="btn btn-danger " value="Delete " style="width:100px; " />
                    </a>
                </li>
            </ul>

            <!-- <ul class="list-group list-group-flush mr-5 " style=" border:none;float:right; margin-top:-100px; ">
                <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text "></p>
                    <input type="button " class="btn btn-warning " value="More Detalis " />
                </li
                <li class="list-group-item text-warning " style=" border:none;">
                    <p class="card-text ">
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                    </p>
                </li>';

                    echo '

                <li class="list-group-item " style="border:none">
                <a href="#" data-toggle="modal" data-target="#confirmTour">
                    <input type="button" name="select" id="select" class="btn btn-danger " value="Delete" style="width:100px; " />
                </a>
                </li>
            </ul>-->
            </div>

            <div class="modal fade" id="confirmTour" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalCenterTitle">Are you sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">NO</button>
                        <button type="submit" class="btn btn-danger">YES</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-muted ">
                <small class="text-muted ">
                    <i class="far fa-clock mr-2 "></i> ' . $row["days"] . '</small>
            </div>
            </div></form></div>
            ';
                }
            } else {
                echo '<div class=text-center>
            <h2>No selected tour plans! <a href="tourPlans.php" style="color: gold;">Click here</a> to see and choose tour plan</h2>
        </div>';
            }
        }
        ?>




        <h2 class="display-4 text-center text-primary">Apartment</h2>

        <?php

        if (isset($_SESSION["email"])) {
            $session = $_SESSION["email"];
            //echo 'session = ' . $session;
            //echo 'length = ' . strlen($session);
            $sql = "Select userapartment.apartmentID,userapartment.name, userapartment.arrival, userapartment.departure, apartment.ID, apartment.title, apartment.description, apartment.place, apartment.img, apartment.price from userapartment inner join apartment on apartment.ID = userapartment.apartmentID having userapartment.name like '%" . trim($session) . "%' ";
            $result = $dbc->query($sql);

            $count = $result->num_rows;
            if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="myContainer"><form action = "delete/deleteApartment.php" method = "POST"><div class="card text-center mt-4 ">

            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="apartmentID" id="apartmentID" hidden>
            <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>
                
                    <img src="' . $row["img"] . '" class="img-fluid " alt="skijanje " width="400 " height="250
            " style="float:left; " />
       

            
                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>
         
            <ul class="list-group list-group-flush tourPlans2 " style="width:390px; border:none; ">
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Arrival: ' . $row["arrival"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Departure: ' . $row["departure"] . '</span>
                    </p>
                </li>
            </ul>
            
            <ul class="navbar-nav ml-auto selectTour" style="float:right; margin-top:-100px;">
                <li class="list-group-item" style="border:none;">
                    <a href="#" data-toggle="modal" data-target="#confirmApartment">
                        <input type="button" name="select" id="select" class="btn btn-danger " value="Delete " style="width:100px; " />
                    </a>
                </li>
            </ul>

            <!--
            <ul class="list-group list-group-flush mr-5 mt-3" style=" border:none;float:right; margin-top:-100px; ">
                <!- <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text "></p>
                    <input type="button " class="btn btn-warning " value="More Detalis " />
                </li>
                <li class="list-group-item text-warning " style=" border:none;">
                    <p class="card-text ">
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                    </p>
                </li>>-->';
                    echo '

                <!--<li class="list-group-item " style="border:none">
                    <a href="#" data-toggle="modal" data-target="#confirmApartment">
                        <input type="button" name="select" id="select" class="btn btn-danger " value="Delete " style="width:100px; " />
                    </a>
                </li>
                
            </ul>-->
            
            </div>

            <div class="modal fade" id="confirmApartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalCenterTitle">Are you sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">NO</button>
                        <button type="submit" class="btn btn-danger">YES</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-muted ">
            <span style="float:left !important"><i class="fas fa-dollar-sign mr-2"></i>' . $row["price"] . ' per day</span>
            <input type="number" value="' . $row["price"] . '" id="apartmentPrice" hidden>
                <small class="text-muted ">
                    <i class="fa  fa-map-marker mr-2"></i> ' . $row["place"] . '</small>
            </div>
            </div></form></div>
            ';
                }
            } else {
                echo '<div class=text-center>
            <h2>No apartment selected! <a href="apartment.php" style="color: gold;">Click here</a> to see and reserve an apartment</h2>
        </div>';
            }
        }
        ?>

        <h2 class="display-4 text-center text-primary">Hotel</h2>

        <?php

        if (isset($_SESSION["email"])) {
            $session = $_SESSION["email"];
            //echo 'session = ' . $session;
            //echo 'length = ' . strlen($session);
            $sql = "Select userhotel.hotelID,userhotel.name, hotel.ID, hotel.title, hotel.description, hotel.place, hotel.img from userhotel inner join hotel on hotel.ID = userhotel.hotelID having userhotel.name like '%" . trim($session) . "%' ";
            $result = $dbc->query($sql);

            $count = $result->num_rows;
            if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="myContainer"><form action = "delete/deleteHotel.php" method = "POST"><div class="card text-center mt-4 ">

            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="hotelID" id="hotelID" hidden>
            <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["title"] . '</h5>
                <a href="# " style="text-decoration:none; ">
                    <img src="' . $row["img"] . '" class="img-fluid " alt="skijanje " width="400 " height="250
            " style="float:left; " />
            </a>

            <!--<a href="# " style="text-decoration:none; ">-->
                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>
            <!--</a>-->
            
            <ul class="navbar-nav ml-auto selectTour" style="float:right; margin-top:-100px;">
                <li class="list-group-item" style="border:none;">
                    <a href="#" data-toggle="modal" data-target="#confirmHotel">
                        <input type="button" name="select" id="select" class="btn btn-danger " value="Delete " style="width:100px; " />
                    </a>
                </li>
            </ul>


            <!--<ul class="list-group list-group-flush mr-5 mt-3" style=" border:none;float:right; margin-top:-100px; ">
                <!- <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text "></p>
                    <input type="button " class="btn btn-warning " value="More Detalis " />
                </li
                <li class="list-group-item text-warning " style=" border:none;">
                    <p class="card-text ">
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                    </p>
                </li>>-->';
                    echo '

                <!--<li class="list-group-item " style="border:none">
                    <a href="#" data-toggle="modal" data-target="#confirmHotel">
                        <input type="button" name="select" id="select" class="btn btn-danger " value="Delete " style="width:100px; " />
                    </a>
                </li>
            </ul>-->
            </div>


            <div class="modal fade" id="confirmHotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalCenterTitle">Are you sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">NO</button>
                        <button type="submit" class="btn btn-danger">YES</button>
                    </div>
                    </div>
                </div>
            </div>

            <div class="card-footer text-muted ">
                <small class="text-muted ">
                    <i class="fa  fa-map-marker mr-2"></i> ' . $row["place"] . '</small>
            </div>
            </div></form></div>
            ';
                }
            } else {
                echo '<div class=text-center>
            <h2>No hotel selected! <a href="hotel.php" style="color: gold;">Click here</a> to see and reserve a hotel</h2>
        </div>';
            }
        }
        ?>

        <h2 class="display-4 text-center text-primary">Car</h2>
        <?php

        if (isset($_SESSION["email"])) {
            $session = $_SESSION["email"];
            //echo 'session = ' . $session;
            //echo 'length = ' . strlen($session);
            $sql = "Select usercar.carID,usercar.name, usercar.arrival, usercar.departure,usercar.driver, cars.ID, cars.title, cars.type, cars.description, cars.people, cars.year, cars.price, cars.img from usercar inner join cars on cars.ID = usercar.carID having usercar.name like '%" . trim($session) . "%' ";
            $result = $dbc->query($sql);

            $count = $result->num_rows;
            if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($row["driver"] == 'yes') {
                        $row["price"] += 40;
                    }
                    echo '<div class="myContainer"><form action = "delete/deleteCar.php"><div class="card text-center mt-4 ">
            <div class="card-header text-success h3 text-uppercase ">' .
                        $row["title"] . '
            </div>
            <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
            <input type="text" value=" ' . $row["ID"] . ' "  name="carID" id="carID" hidden>
            <div class="card-body ">
                <h5 class="card-title text-left ml-5 h1 text-primary "> ' . $row["type"] . '</h5>
               
                    <img src="data:image/jpeg;base64,' . base64_encode($row["img"]) . '" class="img-fluid " alt="skijanje " width="400 " height="250
            " style="float:left; " />
          

           
                <label class="card-text " style="max-width:800px; ">' . $row["description"] . '</label>
        

            <ul class="list-group list-group-flush tourPlans2 " style="width:390px; border:none; ">
                <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-users "></i>
                        <span class="ml-2 ">Max People: ' . $row["people"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Model Year: ' . $row["year"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-euro-sign mr-4 "></i> ' . $row["price"] . '</p>
                        <input type="number" value="' . $row["price"] . '" id="carPrice" hidden>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Model Year: ' . $row["arrival"] . '</span>
                    </p>
                </li>
                <li class="list-group-item text-warning ">
                    <p class="card-text " style="float:left; ">
                        <i class="fas fa-calendar-alt "></i>
                        <span class="ml-3 ">Model Year: ' . $row["departure"] . '</span>
                    </p>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto selectTour" style="float:right; margin-top:-100px;">
                <li class="list-group-item" style="border:none;">
                    <a href="#" data-toggle="modal" data-target="#confirmCar">
                        <input type="button" name="select" id="select" class="btn btn-danger " value="Delete " style="width:100px; " />
                    </a>
                </li>
            </ul>

            <!--<ul class="list-group list-group-flush mr-5 " style=" border:none;float:right; margin-top:-100px; ">
                 <li class="list-group-item text-warning mt-4 " style="border:none; ">
                    <p class="card-text "></p>
                    <input type="button " class="btn btn-warning " value="More Detalis " />
                </li>
                <li class="list-group-item text-warning " style=" border:none;">
                    <p class="card-text ">
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                        <i class="far fa-star "></i>
                    </p>
                </li>
                <li class="list-group-item " style="border:none">
                    <input type="submit" name="select" id="select" class="btn btn-danger " value="Delete " style="width:100px; " />
                </li>
            </ul>-->
            </div>

            <div class="modal fade" id="confirmCar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalCenterTitle">Are you sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">NO</button>
                        <button type="submit" class="btn btn-danger">YES</button>
                    </div>
                    </div>
                </div>
            </div>

            </div></form></div>
            ';
                }
            } else {
                echo '<div class=text-center>
            <h2>No car selected! <a href="rent.php" style="color: gold;">Click here</a> to see and rent a car</h2>
        </div>';
            }
        }
        ?>

        <div class="text-center ">
            <label for="totalPrice" style="font-size:25px; color:gold">Total Price:</label>

            <div class="offset-md-4 col-md-6 col-lg-4 col-10 offset-1">
                <div class="input-group ml-3" id="priceInput">
                    <span class="input-group-addon">$</span>
                    <input type="number" value="0" id="totalPrice" name="price" readonly data-number-to-fixed="2" style="height:50px;" class="form-control currency price" />
                </div>
            </div>

            <button id="pay" class="btn btn-lg btn-primary my-4 col-6" style="height:100px !important; width: 100%; "><span style="font-size:20px">Confirm</span></button>
            <!-- 
           <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="MKGFYBG4TM5CA">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>


<div id="paypal-button-container"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>
//totalPrice + '.0'
// Render the PayPal button
paypal.Button.render({
// Set your environment
env: 'sandbox', // sandbox | production

// Specify the style of the button
style: {
  layout: 'vertical',  // horizontal | vertical
  size:   'medium',    // medium | large | responsive
  shape:  'rect',      // pill | rect
  color:  'gold'       // gold | blue | silver | white | black
},

// Specify allowed and disallowed funding sources
//
// Options:
// - paypal.FUNDING.CARD
// - paypal.FUNDING.CREDIT
// - paypal.FUNDING.ELV
funding: {
  allowed: [
    paypal.FUNDING.CARD,
    paypal.FUNDING.CREDIT
  ],
  disallowed: []
},

// Enable Pay Now checkout flow (optional)
commit: true,

// PayPal Client IDs - replace with your own
// Create a PayPal app: https://developer.paypal.com/developer/applications/create
client: {
  sandbox: 'AZU7Am5Pr40aLak3_2w1_pxG5X1youyc0W7i7jXQM8W0UphMpplLsMQMbJep4RNUn01toFIavfO0BuJx',
  production: '<insert production client id>'
},

payment: function (data, actions) {
    totalPrice = $('.price').val()
    totalPrice = parseFloat(totalPrice)
    
  return actions.payment.create({
    payment: {
      transactions: [
        {
          amount: {
            total: '1.0' ,
            currency: 'USD'
          }
        }
      ]
    }
  });
},

onAuthorize: function (data, actions) {
  return actions.payment.execute()
    .then(function () {
      window.alert('Payment Complete!');
    });
}
}, '#paypal-button-container');
</script>-->

        </div>

        <h2 class="display-4 text-center text-primary">Requested tour plan(s)</h2>

        <?php

        if (isset($_SESSION["email"])) {
            $session = $_SESSION["email"];
            //echo 'session = ' . $session;
            //echo 'length = ' . strlen($session);
            $sql = "Select * from tourrequest where name like '%" . trim($session) . "%' ";
            $result = $dbc->query($sql);

            $count = $result->num_rows;
            if ($count > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<form action = "delete/deleteRequest.php" method = "POST">
            <div class="card  mt-4 ">

                <input type="text" value=" ' . $session . '  "  name="session" id="session" hidden>
                <input type="text" value=" ' . $row["id"] . ' "  name="idnum" id="idnum" hidden>
                <input type="text" value=" ' . $count . ' "  name="count" id="count" hidden>
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-4 col-12 mb-2">
                            <label>City: </label>
                            <input type="text" class="form-control" id="city"  value="' . $row["city"] . '" readonly>

                        </div>
                        <div class="col-md-6 col-12 mb-2">
                        <label>Length: </label>
                            <input type="number" class="form-control" id="length" value="' . $row["length"] . '" readonly>
                        </div>
                        
                        <div class="col-md-4 col-12 mb-2">
                        <label>People: </label>
                            <input type="number"  class="form-control" id="people" value="' . $row["people"] . '" readonly>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                        <label>Child: </label>
                            <input type="number"  class="form-control" id="child" value="' . $row["child"] . '" readonly>
                        </div>
                        
                        <div class="col-md-4 col-12 mb-2">
                        <label>Driver: </label>
                            <input type="text" class="form-control" id="driver" value="' . $row["driver"] . '" readonly>
                        </div>
                        <div class="col-12 col-md-4 mb-2">
                        <label>price: </label>
                            <input type="number" class="form-control" id="price" value="' . $row["price"] . '" readonly>
                        </div>
                        
                        
                        
                        <div class="col-1 mt-4">
                            <a href="#" data-toggle="modal" data-target="#confirmRequest">
                                <input type="button" id="delete" class="btn btn-danger mt-2" value="Delete" >
                            </a>
                        </div>

                        <div class="modal fade" id="confirmRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger" id="exampleModalCenterTitle">Are you sure?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">NO</button>
                                    <button type="submit" class="btn btn-danger">YES</button>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            </form>

            ';
                    /* TODO: uradit update

<div class="col-1 mt-4 mr-2 mr-lg-0">
    <button type="button" id="update" class="btn btn-warning"  data-toggle="modal" data-target="#updateModal' . $row["id"] . '">
    Update
    </button>
</div>
            <div class="modal fade" id="updateModal' . $row["id"] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Update your request</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                                <div class="row">
                                    <div class="col-12">
                                    <form action="updateTour.php" method="post">
                                    <input type="text" value=" ' . $row["id"] . ' "  name="idnum2" id="idnum2" hidden>
                                        <div class="col-12 mt-3">
                                        <label for="tourCity" class="labelStyle">Tour cities: </label>
                                        <input type="text" value=" ' . $row["city"] . ' "  name="tourCity" id="tourCity" class="form-control">
                                        </div>
                                        <div class="col-12 mt-3">
                                        <label for="tourLength" class="labelStyle">Tour length: </label>
                                        <input type="text" value=" ' . $row["length"] . ' "  name="tourLength" id="tourLength" class="form-control">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label for="tourBudget" class="labelStyle">User budget: </label>
                                            <input type="text" value=" ' . $row["budget"] . ' "  name="tourBudget" id="tourBudget" class="form-control">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label for="tourPeople" class="labelStyle">No. people: </label>
                                            <input type="text" value=" ' . $row["people"] . ' "  name="tourPeople" id="tourPeople" class="form-control">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label for="tourPeriod" class="labelStyle">Tour period: </label>
                                            <input type="text" value=" ' . $row["price"] . ' "  name="tourPeriod" id="tourPeriod" class="form-control">
                                        </div>
                                        <div class="col-12 mt-3">
                                        <label for="tourInterpreter" class="labelStyle">Interpreter: </label>
                                        <input type="text" value=" ' . $row["interpreter"] . ' "  name="tourInterpreter" id="tourInterpreter" class="form-control">
                                        </div>
                                        <div class="col-12 mt-3">
                                        <label for="tourDriver" class="labelStyle">Driver: </label>
                                        <input type="text" value=" ' . $row["driver"] . ' "  name="tourDriver" id="tourDriver" class="form-control">
                                        </div>
                                        <div class="col-12 mt-3">
                                            <label for="tourPrice" class="labelStyle">Tour price: </label>
                                            <input type="text" value=" ' . $row["price"] . ' "  name="tourPrice" id="tourPrice" readonly class="form-control" >
                                        </div>
                                        <div class="mt-3 ml-3">
                                            <input type="submit" value="Update" class="btn btn-success mb-2"  id="change">
                                        </div>
                                        </form>
                                        </div>
                               
                            </div>
                    </div>
                    
                    </div>
                </div>
            </div>



                     */
                }
            } else {
                echo '<div class=text-center>
            <h2>No requested tour ! <a href="makeTour.php" style="color: gold;">Click here</a> to request one.</h2>
        </div>';
            }
        }
        ?>
    </section>

    <!--



       <div class="col-1 mb-2">
                            <input type="button" class="btn btn-warning" id="edit" value="Edit">
                        </div>
        <script>

        $('#edit').click(function () {
            $('#length').removeAttr('readonly');
            $('#budget').removeAttr('readonly');
            $('#people').removeAttr('readonly');
            var session = $('#session').val();
            var idnum = $('#idnum').val();

            $('#edit').attr('value', 'Save');
            $('#delete').attr('disabled', '');



            $('#edit').click(function () {
                $('#alert').removeClass('alert-success').removeClass('#alert-danger')
                $('#length').attr('readonly', '');
                $('#budget').attr('readonly', '');
                $('#people').attr('readonly', '');

                $('#edit').attr('value', 'Edit');
                $('#delete').removeAttr('disabled');

                var length = $('#length').val();
                var budget = $('#budget').val();
                var people= $('#people').val();
                var price = $('#price').val();

                console.log(price);

                if(length != 0) {
                    if (length < 3) {
                        price += 35;
                        console.log(price);
                    } else if (length < 5) {
                        price += 50;
                        console.log(price);
                    } else if (length < 8) {
                        price += 75;
                        console.log(price);
                    } else {
                        price += 100;
                        console.log(price);
                    }
                }

                if(people != 0) {
                    if (people < 5 ) {
                        price += 200;
                        console.log(price);
                    } else if (people < 10) {
                        price += 250;
                        console.log(price);
                    } else {
                        price += 350;
                        console . log(price);

                    }
                }

                document.getElementById("price").value = price;
                document.getElementById("budget").value = budget;

                if (budget == 0 || budget == ""){
                    $("#alert").addClass('alert-danger');
                    $("#alert").html("Enter your budget");
                    $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                }else if(people == 0 || people == ""){
                    $("#alert").addClass('alert-danger');
                    $("#alert").html("Enter how amny people will be");
                    $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                } else if(length == 0 || length == "" ){
                    $("#alert").addClass('alert-danger');
                    $("#alert").html("Enter how many days the tour will be");
                    $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                } else if(budget < price ){
                    $("#alert").addClass('alert-danger');
                    $("#alert").html("Your budget is smaller than the total price");
                    $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                } else {
                    $.ajax ({
                        url : "./updateRequest.php?task=update&people="+people+"&budget="+budget+"&length="+length+"&price="+price+"&session="+session,
                        success: function (data){
                            if(data.indexOf('sent') > -1){
                                $("#alert").addClass('alert-success');
                                $("#alert").html("Updated successfully.");
                                $("#alert").fadeIn(500).delay(1000).fadeOut(500);
                            } else {
                                $("#alert").addClass('alert-danger');
                                $("#alert").html('Error occured');
                                $("#alert").slideDown(500).delay(1000).slideUp(500);
                            }
                        },
                        error: function (data, err){
                            $("#alert").addClass('alert-danger');
                            $("#alert").html('Some problem occured. We are sorry.');
                            $("#alert").slideDown(500).delay(1000).slideUp(500);
                        }
                    })
                }

            })
        })
    </script>
 -->

    <div class="modal fade " id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleSign">
                        <img src="images/btt logo png.png" class="img-fluid mr-5" width="85" height="85" alt="BTT">
                        <label class="h2 text-primary ml-5">BTT</label>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fas fa-times text-dark"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <p style="font-size:2vw; margin: 0px;" class="text-center text-primary">THANKS FOR YOUR RESERVATION.</h2>
                        </div>
                    </div>
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
        $('#payButton, #pay').click(function() {

            var carID = $('#carID').val()
            var session = $('#session').val()
            var tourID = $('#tourID').val()
            var apartmentID = $('#apartmentID').val()
            var hotelID = $('#hotelID').val()
            var price = $('#totalPrice').val()


            if (typeof apartmentID === 'undefined') {
                apartmentID = 0
            }

            if (typeof tourID === 'undefined') {
                tourID = 0
            }

            if (typeof hotelID === 'undefined') {
                hotelID = 0
            }

            if (typeof carID === 'undefined') {
                carID = 0
            }





            $.ajax({
                url: "confirmOffer/confirm.php?carID=" + carID + "&tourID=" + tourID + "&session=" + session + "&apartmentID=" + apartmentID + "&hotelID=" + hotelID + "&price=" + price,
                success: function(data) {
                    jQuery.noConflict();
                    if (data.indexOf('sent') > -1) {
                        toastr.success("Reservation confirmed successfully");
                        jQuery.noConflict();
                        $('#confirmModal').modal('show');
                        window.setTimeout(function() {
                            location.reload()
                        }, 2000)
                    } else {
                        toastr.error("Problem occurred, please try again!")
                    }
                },
                error: function(data, err) {
                    toastr.error("There is some problem, please try later!")
                }
            })


        });
    </script>


    <script>
        $("body > *").not("body > .loader").addClass('hidden');
        $('body').css('background-color', '#d1d1d1')
        $(window).on("load", function() {
            $(document).ready(function() {
                $('body').css('background-color', '')
                $('.hidden').removeClass('hidden')
                $('#jumbotron').addClass('jumbotronMy')
                $('.loader').hide()
                var tourPrice = parseInt($("#tourPrice").val())
                var apartmentPrice = parseInt($("#apartmentPrice").val())
                var carPrice = parseInt($("#carPrice").val())

                var carID = $('#carID').val()
                var tourID = $('#tourID').val()
                var apartmentID = $('#apartmentID').val()
                var hotelID = $('#hotelID').val()
                var price = $('#totalPrice').val()


                if (typeof tourID === 'undefined' && typeof apartmentID === 'undefined' && typeof hotelID === 'undefined' && typeof carID === 'undefined') {
                    $('#payButton, #pay').attr('disabled', true)
                }


                if (isNaN(tourPrice)) {
                    tourPrice = 0
                }
                if (isNaN(apartmentPrice)) {
                    apartmentPrice = 0
                }
                if (isNaN(carPrice)) {
                    carPrice = 0
                }

                var totalPrice = tourPrice + apartmentPrice + carPrice
                console.log(totalPrice)

                $('.price').val(totalPrice)
            })
        });
    </script>

    <script src="loaders.css.js "></script>

</body>

</html>