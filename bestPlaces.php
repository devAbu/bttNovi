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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



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

    <div id="navbarInclude"></div>

    <div class="loader">
        <div class="loader-inner ball-scale-multiple">
        </div>
    </div>


    <section id="jumbotron" class=" jumbotron-fluid text-white d-flex justify-content-center align-items-center">
        <div class="container text-center hidden">
            <h1 class="display-1 text-primary text-uppercase" style="text-shadow: 4px 3px black;">BTT</h1>
            <p class="display-4 d-none d-sm-block" style="text-shadow: 3px 3px black;">Bosnian Tourist Travel</p>
            <p class="lead text-uppercase" style="font-size:40px; color:gold;" style="text-shadow: 3px 4px black;">What we have to offer</p>
            <p class=" h5 mb-3" style="text-shadow: 2px 2px black;">Visit us on:</p>
            <a href="https://www.instagram.com/bosnian_tourist_travel/" target="_blank" class="btn btn-lg btn-primary mb-1"><i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
            <a href="https://www.facebook.com/tourAgencyBTT/" target="_blank" class="btn btn-lg btn-primary mb-1"><i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
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
                scrollTop: $(sectionTo).offset().top - 40
            }, 1000);
        });
    </script>

    <section id="res">
        <?php

        require 'connection/connect.php';

        $sql = "SELECT * FROM bestplaces";
        $result = $dbc->query($sql);

        $count = $result->num_rows;

        if ($count > 0) {
            echo '<div class="row  bg hidden" style="margin:0px" >';
            while ($row = $result->fetch_assoc()) {
                echo '<div class=" col-sm-12 col-11 col-md-5 col-lg-5 hidden" style="margin-left: 70px;" id="bestPlacesMain" >
        <a href="#" data-toggle="modal" data-target="#' . $row["ID"] . '">
            <img id="bestPlaceImg" style="width:90vw; height:50vh;" src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" alt="' . $row['title'] . '" class="img-fluid best mt-3" /></a>
            <h2 class="text-warning text-uppercase text-center" style="margin-bottom:0px;">' . $row["title"] . '</h2>
        </div>
        <div class="modal fade hidden" id="' . $row['ID'] . '" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src=" data:image/jpeg;base64,' . base64_encode($row["img"]) . '" alt="' . $row['title'] . '" class="img-fluid" style="width:90vw; height:50vh;" />
                    </div>
                </div>
            </div>
        </div>
        ';
            }
            echo '</div>';
        } else {
            echo " 0 results";
        }
        $dbc->close();
        ?>

    </section>

    <div id="footerInclude"></div>


    <script>
        $("body > *").not("body > .loader").addClass('hidden');
        $('body').css('background-color', '#d1d1d1')
        $(window).on("load", function() {

            $(document).ready(function() {
                $('body').css('background-color', '')
                $('#jumbotron').addClass('jumbotron5')
                $('.loader').fadeOut()
                $('.hidden').removeClass('hidden')
            })
        });
    </script>

    <script src="loaders.css.js "></script>
</body>

</html>