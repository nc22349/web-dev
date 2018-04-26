<nav id="navbar" class="navbar navbar-expand-md navbar-light bg-light sticky-top justify-content-between border-bottom">
    <a href="../Homepage/home.html"><img src="Global_Images/Logo.png" alt="Home" style="height: 60px;"</img></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcollapse" aria-controls="navcollapse" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navcollapse">
        <ul class="navbar-nav pl-5 mr-auto">
            <li class="nav-item pr-3">
		<a class="nav-link text-burnt-orange" href="no_page.html">Browse</a>
	    </li>
	    <li class="nav-item">
		<form class="form-inline my-2 my-md-0">
            	    <input class="form-control focus-orange" type="text" placeholder="Search Photographers">
		</form>
	    </li>
	</ul>
	<ul class="navbar-nav">
            <?php
                session_start();
                if (isset($_SESSION["user"])) {
                    print '<li class="nav-item"><a class="nav-link text-burnt-orange" href="logout.php">Log Out</a></li>';
                } else {
                    print '<li class="nav-item"><a class="nav-link text-burnt-orange" href="Become_A_Photographer">Register</a></li>';
                    print '<li class="nav-item"><a class="nav-link text-burnt-orange" href="no_page.html">Sign In</a></li>';
                }
            ?>
        </ul>
    </div>
</nav>
