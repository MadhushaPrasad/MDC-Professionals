<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDC | Contact Us Page</title>

    <!--    google font css-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="../../assets/css/contact-us.css">
    <link rel="stylesheet" href="../../assets/css/seekerHeader.css">
    <link rel="stylesheet" href="../../assets/css/header-image.css">
    <link rel="stylesheet" href="../../assets/css/seekerFooter.css">
</head>
<body>
<!--header start-->
<?php
include '../../includes/common/seekerHeader.php';
?>
<!--header end-->
<main>
    <!--    header images start-->
    <?php
    include '../../includes/header-image.php';
    ?>
    <!--    header images end-->

    <!--    contact us content start-->
    <div class="contactUsMainDiv">
        <div class="ContactUsContentDiv">
            <h1>Contact Us</h1>
            <form action="">
                <div id="inputDiv">
                    <div class="inputDiv">
                        <input type="text" id="fName" name="firstName" placeholder="First Name" required>
                    </div>
                    <div class="inputDiv">
                        <input type="text" id="lName" name="lastName" placeholder="Last Name" required>
                    </div>
                </div>
                <div id="inputDiv">
                    <div class="inputDiv">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="inputDiv">
                        <input type="text" id="mNumber" name="mNumber" placeholder="Mobile Number" required>
                    </div>
                </div>
                <textarea name="message"
                          id="message"
                          placeholder="Message" required
                ></textarea>
                <br> <br>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <!--    contact us content start-->
    <!--    footer start-->
    <?php
    include '../../includes/common/seekerFooter.php';
    ?>
    <!--    footer end-->
    <script src="../../assets/js/collapseButton.js"></script>
    <script src="../../assets/js/header.js"></script>
</main>
</body>
</html>