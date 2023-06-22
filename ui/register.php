<?php
session_start();
require_once('../app/config/config.php');
require_once('../app/helpers/auth.php');
require_once('../app/partials/head.php');
?>

<body class="h-100" style="background-image: url(../public/images/banner3.jpg);">
    <div class="authincation h-100">
        <div class="container h-100">
            <br>
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href=""><img src="../public/images/logo-full.png" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">
                                        Veterinatry Clininc Management System <br>
                                        Sign In
                                    </h4>
                                    <hr>
                                    <form method="POST">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Full Names</strong></label>
                                            <input required type="email" name="client_name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input required type="email" name="client_email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Contacts</strong></label>
                                            <input required type="text" name="client_contact" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Address</strong></label>
                                            <input required type="text" name="client_address" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Password</strong></label>
                                            <input required type="password" name="login_password" class="form-control">
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" name="Register_Client" class="btn bg-white text-primary btn-block">Sign Up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p class="text-white">Already have an account? <a class="text-white" href="login">Sign In</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <?php require_once('../app/partials/scripts.php'); ?>

</body>

</html>