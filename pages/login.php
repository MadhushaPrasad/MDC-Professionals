<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>MDC | log in</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="center">

    <div class="img">
        <img src="../assets/images/login-image.png" alt="image">
    </div>

    <div class="container">

        <img src="../assets/images/small-logo.png" alt="image">

        <div class="text">Login Form</div>
        <br>


        <form action="../services/checkUser.php" method="post">
            <div class="tik">
                <input type="radio" name="choose" id="seeker" value="seeker" required><label for="seaker">Seaker</label>
                <input type="radio" name="choose" id="provider" value="provider" required><label
                        for="provider">Provider</label>
                <input type="radio" name="choose" id="admin" value="admin" required><label for="admin">Admin</label>
            </div>
            <div class="data">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="data">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="forgot-pass"><a href="forget_password.php">Forgot Password</a></div>

            <div class="btn">
                <div class="inner"></div>
                <button type="submit" name="login"> Login</button>
            </div>
            <div class="create_acc">Don't You Have An Acoount ?<br><br><a href="signup-welcome.php">Create
                    Account</a></div>

        </form>
    </div>
</div>
</body>
<script>
    window.addEventListener('load', function () {
        <?php
        if (!(empty($_SESSION['email'] || $_SESSION['password'] || $_SESSION['userType']))) {

        if ($_SESSION['userType'] == 'Admin') {
            header('location:/MDC-Professionals/pages/admin/dashboard.php');
        } else if ($_SESSION['userType'] == 'Seeker') {
            header('location:/MDC-Professionals/pages/seeker/seekerHomepage.php');
        } else {
            header('location:/MDC-Professionals/pages/provider/providerHomepage.php');
        }

    } else {
        ?>
        swal({
            title: "Warning",
            text: "Something Wrong. Please Login Again!",
            icon: "error",
        });
        <?php

        }
        ?>
    });
</script>
</html>