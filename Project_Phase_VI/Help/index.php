<!-- CONTACT US index.html -->

<html>
    <head>
        <title>Help</title>
        <?php include "../head-content.html"; ?>
    </head>
    <body>
        <?php include "../navbar.php"; ?>
        <div class="container setmax">
            <div class="py-5 text-center">
                <h2>Contact Us</h2>
                <p class="lead">Do you need help using the site? Fill out the form below and an ATX Grad Photo representative will get back to you promptly.</p>
            </div>
            <form id="registrationForm" class="needs-validation">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username" autocomplete="off" required>
                        <div class="invalid-feedback">That username is taken.</div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            <form id="helpForm" class="needs-validation">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">First name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Last name<span class="text-muted"> (Optional)</span></label>
                            <input type="text" class="form-control" name="lastname" id="lastname">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">Valid email is required.</div>
                </div>
                <div class="form-group mb-3">
                    <label for="comments">Comments</label>
                    <textarea class="textarea" id="comments" placeholder="Your comments/question here..." required></textarea>
                </div>
                <hr class="mb-4">
                <button class="btn btn-lg burnt-orange mx-auto" type="submit">Submit</button>
            </form>
        </div>
        <?php include "./../footer.php"; ?>
    </body>
</html>
