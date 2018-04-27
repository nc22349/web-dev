<?php
    if ($home === true) {
	   $cd = "";
    } else {
	   $cd = "../";
    }

    print <<<FOOTER
        <footer class="burnt-orange container-fluid">
            <div class="row">
                <div class="col-4 col-md text-center">
                    <a href="$cd"><img src="${cd}Global_Images/Logo.png" alt="Home" style="height: 60px;"</img></a>
                </div>
                <div class="col-4 col-md">
                    <ul class="list-unstyled text-small">
                        <li><a class="text-burnt-orange" href="${cd}Become_A_Photographer">Become a Photographer</a></li>
                        <li><a class="text-burnt-orange" href="${cd}About/about.html">About the Developers</a></li>
                        <li><a class="text-burnt-orange" href="${cd}Help">Help</a></li>
                    </ul>
                </div>
                <div class="col-4 col-md">
                    <ul class="list-unstyled text-small">
                        <li><a class="text-burnt-orange" href="${cd}FAQ">FAQ</a></li>
                        <a class="text-burnt-orange" href="${cd}Site_Feedback">Site Feedback</a></li>
                    </ul>
                </div>
            </div>
        </footer>
FOOTER;

?>
