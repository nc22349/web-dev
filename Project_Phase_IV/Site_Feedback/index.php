<!-- SITE FEEDBACK page -->

<html>
    <head>
        <title>Site Feedback</title>
        <?php include "../head-content.html"; ?>
    </head>
    <body>
        <?php include "../header.html"; ?>
        <div class="container setmax">
            <div class="py-5 text-center">
                <h2>Site Feedback</h2>
                <p class="lead">We are happy to accept any comments you have about our site's usability and layout. Just fill out the form below and the ATX Grad Photo team will discuss your suggestions.</p>
            </div>
            <form class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="firstName">Name<span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="email">Email<span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">This email is not valid.</div>
                </div>
                <div class="mb-3">
                    <label for="feedback">Feedback</label>
                    <textarea class="textarea" id="feedback" placeholder="Your feedback here..."></textarea>
                </div>
                <hr class="mb-4">
                <button class="btn btn-lg burnt-orange" type="submit">Submit</button>
            </form>
        </div>
        <?php include "./../footer.html"; ?>
    </body>
</html>