<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <!-- BOOTSTRAP -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- JQUERY -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="header">
            <div id="register_buttons">
                <input type="submit" name="Register" value="Register">
                <input type="submit" name="Sign In" value="Sign In">
            </div>
            <div id="small_p">
                <p> Photographer? <a class="orange" href="../Become_A_Photographer">Register here</a></p>
            </div>

            <div id="logo">
                <a class="orange" href="#"><img src="./../Global_Images/Logo.png" alt="ATXGRADPHOTO" height = "50" width = "50"></a>
            </div>
        </div>

        <div id="container"> <!-- Everything below header -->
            <div id="Discover">
                <h1> Discover Photographers in the Austin Area</h1>
            </div>
            <img src="./../Global_Images/camera.png" alt="Camera Clip Art" height = "150" width = "150">
            <input type="submit" name="Browse" value="Browse">
            
            <section class="block-item"> <!-- Each page section -->
                <div id="overview-carousel">
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
            </section>
            <section class="block-item">
                <div id="testimonials">
                    <div id="WOCAS">
                        <h1> What Our Customers Are Saying...</h1>
                    </div>
                    <div id="customer1">
                        <img src="white.jpeg" alt="whitespace1">
                        <img src="white.jpeg" alt="whitespace2">
                        <img src="c1photo1.jpg" alt="Brittany1" height="10" width="10">
                        <div id="c1_quote">
                            <p> ATXGradPhoto helped me find a photographer 2 days before my graduation</p>
                        </div>
                        <div id="c1_info">
                            <p> Brittany | Spring 2018 | Business </p>
                        </div>
                        <img src ="c1photo2.jpg" alt="Brittany2" height="300" width="375">
                    </div>
                    <div id="customer2">
                        <img src="c2photo1.jpeg" alt="Amy1" height="10" width="10">
                        <div id="c2_quote">
                            <p> ATXGradPhoto helped take the stress out of a very stressful situation</p>
                        </div>
                        <div id="c2_info">
                            <p> Amy | Fall 2017 | Engineering </p>
                        </div>
                        <img src ="c2photo2.jpeg" alt="Amy2" height="150" width="100">
                    </div>
                </div>
            </section>
            <section class="block-item">
                <div id="JTCOP">
                    <div id="joinheader">
                        <h1> Join the Community of Photographers </h1>
                    </div>

                    <div id="joinp">
                        <p> Partner with ATXGradPhoto for a new way to find clients </p>
                    </div>

                    <div id="joinlink">
                        <a class="orange" href="../Become_A_Photographer">Getting Started ></a>
                    </div>
                </div>
            </section>
        </div>
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
        </footer>
    </body>
</html>
