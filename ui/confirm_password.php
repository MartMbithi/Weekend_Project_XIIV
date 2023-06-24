<?php
session_start();
require_once('../app/config/config.php');
require_once('../app/helpers/auth.php');
require_once('../app/partials/head.php');
?>

<body class="h-100" style="background: url(../public/images/banner3.jpg); background-size: cover;   background-repeat: no-repeat, repeat; background-position: center;">
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
                                        Confirm Password
                                    </h4>
                                    <hr>
                                    <form method="POST">
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>New Password</strong></label>
                                            <input required type="password" name="confirm_password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Confirm Password</strong></label>
                                            <input required type="password" name="new_password" class="form-control">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="Reset_Password_1" class="btn bg-white text-primary btn-block">Reset Password</button>
                                        </div>
                                    </form>
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