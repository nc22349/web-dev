<nav id="navbar" class="navbar navbar-dark burnt-orange sticky-top justify-content-between py-0">
    <a class="navbar-brand" href="../Homepage/home.html"><img src="Global_Images/Logo.png" alt="Home" style="height: 60px;"</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="no_page.html">Browse</a></li>
            
            <?php
                session_start();
                if (isset($_SESSION["user"])) {
                    print '<li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>';
                } else {
                    print '<li class="nav-item"><a class="nav-link href="Become_A_Photographer">Register</a></li>';
                    print '<li class="nav-item"><a class="nav-link href="no_page.html">Sign In</a></li>';
                }
            ?>
            
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search Photographers">
        </form>
    </div>
</nav>