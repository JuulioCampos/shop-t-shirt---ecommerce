<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="assets\css\Login-Center.css">
        <link rel="stylesheet" href="assets\css\styles.css">
        <?php require_once 'layout\head.html'?>
    </head>
    <body>

        <?php require_once 'layout\navbar.html'?>
        <div class="container row-login">
            <div class="row row-login">
                <div class="col-10 col-sm-6 col-md-4 offset-1 offset-sm-3 offset-md-4">
                    <h1 class="text-center">T-shirt Title</h1>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-danger">Login </h3>
                            <form class="text-center">
                                <div class="form-group"><label>Username </label><input class="form-control" type="text"></div>
                                <div class="form-group"><label>Password </label><input class="form-control" type="password"></div>
                                <div class="form-group">
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Remember me</label></div>
                                </div><button class="btn btn-warning btn-block" type="submit">LOGIN </button>
                                <a class="btn btn-link center-block" role="button" data-toggle="modal" data-target="#modal-forget">Forget Password?</a>
                                <a  class="btn btn-link center-block" role="button" data-toggle="modal" data-target="#modal-register">Sign up</a></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php   require_once 'templates\registrar.html';
                require_once 'templates\recuperar.html'; ?>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
    <?php require_once 'layout\footer.html'?>
</html>