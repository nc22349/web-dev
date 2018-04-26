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
        <?php include "header.php"; ?>
	<div class="jumbotron-fluid" style="height: 100px;">
	</div>
        <div class="container-fluid px-0">
            <!-- Slideshow Overview -->
            
    	    <!-- Testimonials -->
            <section class="align-items-center bg-eee py-3">
                <h1 class="text-center mb-5">What Our Customers Are Saying</h1>
                <div class="row setmax-900">
                    <div class="col-lg-6 order-lg-2">
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
                    <div class="col-lg-6 order-lg-1">
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
        <!--
        <footer>
            <a href="#"><img id="logo-bottom" src="../Global_Images/Logo.png" alt="ATXGRADPHOTO" height = "50" width = "50"></a>
            <div id="bar">
            </div>
            <table>
                <tr>
                    <td><a class="footer-link" href="./../About/about.php">About the Developers</a></td>
                    <td><a class="footer-link" href="../no_page.html">FAQ</a></td>
                </tr>
                <tr>
                    <td><a class="footer-link" href="./../Become_A_Photographer">Become a Photographer</a></td>
                    <td><a class="footer-link" href="./../Site_Feedback/">Site Feedback</a></td>
                </tr>
                <tr>
                    <td><a class="footer-link" href="../no_page.html">Help</a></td>
                    <td><a class="footer-link" href="../Contact_Us/">Contact Us</a></td>
                </tr>
            </table>
        </footer>-->
    </body>
</html>
