<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <!-- BOOTSTRAP -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- CUSTOM STYLESHEETS -->
        <link rel="stylesheet" href="global.css">
        <link rel="stylesheet" href="home.css">
        
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        
        <!-- CUSTOM SCRIPTS -->
        <script src="hideNavbar.js" defer></script> 
    </head>
    <body>
	   <!-- Header -->
        <?php include "header.php"; ?>

        <!-- Jumbotron -->
        <div class="jumbotron bg-eee pt-0">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-6" style="position: relative;">
                    <div style="position: absolute; top: 50%; transform: translateY(-50%);">
                        <h1>Discover photographers in the Austin area.</h1>
                        <p class="lead">Graduating and need someone to take your picture? We've got you covered.</p>
                        <button class="btn burnt-orange" type="button" href="no_page.html">Browse Photographers</button>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="Global_Images/camera.png" class="img-fluid h-auto mx-auto" style="max-width: 400px;">
                </div>
            </div>
            </div>
        </div>

        <div class="container-fluid px-0">
            <!-- Slideshow Overview -->
            <section class="align-items-center py-3"> <!-- Each page section -->
                <div id="howItWorks" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="howItWorks" data-slide-to="0" class="active"></li>
                        <li data-target="howItWorks" data-slide-to="1"></li>
                        <li data-target="howItWorks" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            
                        </div>
                        <div class="carousel-item">
                            
                        </div>
                        <div class="carousel-item">
                            
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#howItWorks" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#howItWorks" role="button" data-slide="next">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--<div id="overview-carousel">
                    <div id="slideshow-container">
                        <div class="slide" id="slide-1">
                            <div class="slide-img" style="background-color: blue;"></div>
                            <div class="slide-body">
                                <h1 class="slide-text">Get Portraits You Will Love From Photographers Near You</h1>
                            </div>
                        </div>
                        <div class="slide" id="slide-2">
                            <div class="slide-img" style="background-color: green;"></div>
                            <div class="slide-body">
                                <h1 class="slide-text">View Profiles of Photographers You Like</h1>
                            </div>
                        </div>
                        <div class="slide" id="slide-3">
                            <div class="slide-img" style="background-color: orange;"></div>
                            <div class="slide-body">
                                <h1 class="slide-text">Contact the Ones You Want</h1>
                             </div>
                        </div>
                        <div id="slide-adv-btns">
                            <span class="slide-adv-btn active-dot" id="0"  onclick="showSelectedSlide(this.id)"></span>
                            <span class="slide-adv-btn" id="1"  onclick="showSelectedSlide(this.id)"></span> 
                            <span class="slide-adv-btn" id="2"  onclick="showSelectedSlide(this.id)"></span>
                        </div>
                    </div>
                </div>
            </section>-->
            
    	    <!-- Testimonials -->
            <section class="align-items-center bg-eee py-3">
                <h1 class="text-center mb-5">What Our Customers Are Saying</h1>
                <div class="row setmax-900">
                    <div class="col-lg-6 order-lg-2 text-center">
                        <img class="w-lg-100 mx-auto" src="Homepage_Resources/c1photo1.jpg" alt="brittany">
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="py-5 p-3 text-center">
                            <h5>Brittany</h5>
                            <p class="lead">ATX Grad Photo helped me find a photographer two days before my graduation!</p>
                            <h5 class="font-weight-light text-burnt-orange">Spring 2018 | Business</h5>
                        </div>
                    </div>
                </div>
                <div class="row setmax-900">
                    <div class="col-lg-6 order-lg-1 text-center">
                        <img class="mw-100 w-auto ml-auto mr-auto" src="Homepage_Resources/c2photo1.jpeg" alt="amy">
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <div class="py-5 p-3 text-center">
                            <h5>Amy</h5>
                            <p class="lead">ATXGradPhoto helped take the stress out of a very stressful situation!</p>
                            <h5 class="font-weight-light text-burnt-orange">Fall 2017 | Engineering</h5>
                        </div>
                    </div>
                </div>
            </section>
 
            <!-- Join the Community -->
            <section class="align-items-center py-5 setmax-900">
                <h1>Join the Community of Photographers</h1>
                <p class="lead">Partner with ATXGradPhoto for a new way to find clients.</p>
                <a class="text-burnt-orange" href="Become_A_Photographer">Get Started ></a>
            </section>
        </div>
        
        <?php include "footer.html"; ?>
	<?php include "bottomScripts.html"; ?>
    </body>
</html>
