<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDC | Contact Us Page</title>
    <link rel="stylesheet" href="../assets/css/contact-us.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/header-image.css">
</head>
<body>
<!--header start-->
<?php
include '../includes/common/header.php';
?>
<!--header end-->
<main>
    <!--    header images start-->
    <?php
    include '../includes/header-image.php';
    ?>
    <!--    header images end-->

    <!--    contact us content start-->
    <div class="contactUsMainDiv">
        <div class="ContactUsContentDiv">
            <h1>Contact Us</h1>
            <form action="">
                <div id="inputDiv">
                    <div class="inputDiv">
                        <input type="text" id="fName" name="firstName" placeholder="First Name">
                    </div>
                    <div class="inputDiv">
                        <input type="text" id="lName" name="lastName" placeholder="Last Name">
                    </div>
                </div>
                <textarea>

                </textarea>
            </form>
        </div>
    </div>
    <!--    contact us content start-->
</main>
</body>
</html>