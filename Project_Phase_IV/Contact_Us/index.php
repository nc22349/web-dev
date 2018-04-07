<!-- CONTACT US index.html -->

<html>
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../global.css">
    </head>
    <body>
        <div class="container setmax">
            <div class="py-5 text-center">
                <h2>Contact Us</h2>
                <p class="lead">Question about the site? Fill out the form below and an ATX Grad Photo representative will get back to you promptly.</p>
            </div>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder value required>
                        <div class="invalid-feedback">First name is required.</div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder value required>
                        <div class="invalid-feedback">Last name is required.</div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">Valid email is required.</div>
                </div>
                <div class="mb-3">
                    <label for="comments">Comments</label>
                    <textarea class="textarea" id="comments" placeholder="Your comments/question here..."></textarea>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </form>
        </div>
        <?php include "./footer.html"; ?>
    </body>
</html>