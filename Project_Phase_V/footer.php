<?php
    if ($home === true) {
	   $cd = "";
    } else {
	   $cd = "../";
    }

    print <<<FOOTER
        <footer class="burnt-orange container-fluid pt-3 pb-1">
            <div class="row">
                <div class="col-12 col-md text-center">
                    <a href="$cd"><img src="${cd}Global_Images/Logo.png" alt="Home" style="height: 70px;"</img></a>
                </div>
                <div class="col-6 col-md">
                    <ul class="list-unstyled text-small text-center">
                        <li><a href="${cd}Become_A_Photographer">Become a Photographer</a></li>
                        <li><a href="${cd}About/about.html">About the Developers</a></li>
                        <li><a href="${cd}Help">Help</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <ul class="list-unstyled text-small text-center">
                        <li><a href="${cd}FAQ">FAQ</a></li>
                        <li><a href="${cd}Site_Feedback">Site Feedback</a></li>
                    </ul>
                </div>
            </div>
        </footer>
FOOTER;

?>
