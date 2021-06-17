<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDC | Seeker Register Page</title>
    <link rel="stylesheet" href="../../assets/css/seekerRegister.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<main>
    <div class="formDiv">
        <div class="container">
            <img src="../../assets/images/small-logo.png" alt="image">
            <div class="form">
                <form action="../../services/providerRegisterService.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="profileImage" id="profile-image"
                           placeholder="Choose a Profile image" required="" capture>
                    <input type="text" name="User_Name" placeholder="User_Name" required>
                    <input type="text" name="First_Name" placeholder="First_Name" required>
                    <input type="text" name="Last_Name" placeholder="Last_Name" required>
                    <input type="text" name="Address" placeholder="Address" required>
                    <!-- <input type="text" name="Phone_Number" placeholder="Phone_Number" required> -->
                    <input type="email" name="Email" placeholder="Email" required>
                    <input type="password" name="Password" placeholder="Password" required>
                    <input type="password" placeholder="Confirm Password" name="con-Password" required>
                    <button type="submit" name="submit" value="submit">Sign Up</button>
                    <p>Having Account Yet?</p>
                    <a href="../login.php">Login</a>
                </form>


            </div>
        </div>
    </div>
    <div class="imgDiv">
        <div class="headerText">
            <p>Enter your data</p>
            <p>For</p>
            <p>Register</p>
        </div>
        <img src="../../assets/images/login-image.png" alt="image">
    </div>
</main>
<script>
    <?php
    if (isset($_SESSION['message'])){
    if ($_SESSION['message'] == "Fail"){
    ?>
    swal({
        title: "Warning",
        text: "Something Wrong. Please Register Again!",
        icon: "error",
    });
    <?php
    }
    }

    ?>
</script>
</body>
</html>