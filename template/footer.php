 <head>
    <style>
        @media only screen and (max-width: 990px) {
            #googleMap,
            #googleMap * {
                width: 450px !important;
                resize: both;
            }
        }

        @media only screen and (max-width: 500px) {
            #googleMap,
            #googleMap * {
                width: 300px !important;
                resize: both;
            }
        }

        @media only screen and (max-width: 767px) {
            .textFooter {
                margin: 0px !important;
            }
        }

    </style>
 </head>
 
 <footer style="background-color:#747778">
        <div class="row no-gutters">
            <div class="col-md-6 col-sm-12 col-12 mt-5">
                <img src="images/btt logo png.png" alt="logo" class="img-fluid ml-sm-2 logo offset-3 offset-sm-0" width="170" height="170"/>
                <label class="text-uppercase text-center text-warning h1 ml-sm-4" style="opacity:0.7;">Bosnian Tourist Travel</label>
                <div class="col-10">
                <p class="text-dark mt-4 textFooter" style="max-width:400px; ">Home to medieval villages, rivers and lakes, plus the craggy Dinaric Alps, and many more, explore our Country.</p>
                </div>
                <div class="col-10 mt-3">
                <p class="text-dark  textFooter">You can see BTT offers by visiting this
                    <a href="tourPlans.php" class="text-warning" style="text-decoration:none;">LINK.</a>
                </p>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12 mt-5 offset-md-1 ml-3">
                <h1 class="text-warning mb-sm-5 text-uppercase " style="margin-top:13px !important; opacity:0.7;">Contact info</h1>
                <ul class="list-group list-group-flush" style=" border:none;">
                    <li class="list-group-item text-warning  mt-4" style="background-color: #747778">Address:
                        <span class="ml-lg-5 ml-md-0 ml-sm-5" id="footerAddress">
                            <a href="#" id="map" data-toggle="modal" class="text-warning" data-target="#map7" style="text-decoration:none;">
                                <i class="fas fa-map-marker mr-2"></i>Grada Bakua 11, Sarajevo</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning " style="background-color: #747778">Phone:
                        <span style="margin-left:60px;">
                            <a href="tel:+38761091675" class="text-warning" style="text-decoration:none;">
                                <i class="fas fa-phone mr-2"></i>(+387)61 091 675</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning " style="background-color: #747778">E-mail:
                        <span  id="footerEmail">
                            <a href="mailto:abdulrahman.almonajed@gmail.com" style="text-decoration:none;" class="text-warning">
                                <i class="far fa-envelope mr-2"></i>abdulrahman.almonajed@gmail.com</a>
                        </span>
                    </li>
                    <li class="list-group-item text-warning " style="background-color: #747778">
                        Visit us on:
                        <a href="https://www.instagram.com/bosnian_tourist_travel/" target="_blank" class="text-warning instFooter">
                            <i class="fab fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
                        <a href="https://www.facebook.com" target="_blank" class="text-warning ml-4" style="text-decoration:none;">
                            <i class="fab fa-facebook mr-2" aria-hidden="true"></i>Facebook</a>
                    </li>
                    <li class="list-group-item" style="background-color: #747778"></li>
                </ul>
            </div>
            <div class="col-12 text-center text-dark mt-3">
                <p style="font-size:20px;">Copyright &copy; 2018 BTT</p>
            </div>
        </div>
    </footer>

    <div class="modal fade" id="map7" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:right;">
                    <span aria-hidden="true" style="float:right;margin-right:15px;margin-top:5px;">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
                <div class="modal-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2878.2453302725744!2d18.349382815303517!3d43.830010879115655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c990fdf0ccc5%3A0xdab20818f84ffaf7!2sGrada+Bakua%2C+Sarajevo+71000!5e0!3m2!1sen!2sba!4v1520858418062"
                        width="700" height="450" frameborder="0" style="border:0" allowfullscreen id="googleMap"></iframe>
                </div>
            </div>
        </div>
    </div>
