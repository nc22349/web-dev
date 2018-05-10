<?php $profile = true; ?>

<!DOCTYPE html>
<html>
	<head>
	    <title>generic profile</title>
	    <?php include "../../head-content.html" ?>
	    <link rel="stylesheet" href="../../global.css">
	</head>
	<body>
	    <?php include "../../navbar.php" ?>
        <div class="container setmax-900 py-5">
	    <div class="row">
		<div class="col-md-6 text-center">
		    <img class="mx-auto img-fluid" src="profile.jpg" alt="profile picture">
		</div>
                <div class="col-md-6">
		    <div>
                        <h5 class="text-center">David Bowie</h5>
                        <table>
                            <tr>
                                <td><strong>Bio:</strong></td>
                                <td>I stepped through the door, floated in a most peculiar way, ended up in Austin, and now I'm taking pictures.</td>
                            </tr>
                            <tr>
                                <td><strong>Languages:</strong></td>
                                <td>English, Martian</td>
                            </tr>
                            <tr>
                                <td><strong>Price:</strong></td>
                                <td>$$</td>
                            </tr>
                            <tr>
                                <td><strong>Payment:</strong></td>
                                <td>Cash, Paypal</td>
                            </tr>
                            <tr>
                                <td><strong>Has own transportation:</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Rating:</strong></td>
                                <td>4.5</td>
                           </tr>
                        </table>
                    </div>
                </div>
            </div>
	</div>
	<?php include "../../footer.php" ?>
    </body>
</html>
