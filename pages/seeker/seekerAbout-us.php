<?php
session_start();

if ((empty($_SESSION['email'] || $_SESSION['password'] || $_SESSION['userType']))) {
    header('location:/MDC-Professionals/pages/login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDC | About Us Page</title>

    <!--    google font css-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="../../assets/css/about-us.css">
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

    <!--    about us content start-->
    <div class="abtUsDivContainer">
        <div class="aboutContent">
            <h1>About Us</h1>
            <p>We are MDC Professionals. Our web site is a method of providing
                Employment online. The main purpose of our web site is to provide
                a platform for job Seekers and Job Providers to fulfill their needs
                efficiently and easily. Our web site has made it easier for the
                unemployed and the employed to get exciting opportunities.
            </p>
            <p>Our servicers </p>
            <ol>
                <li>Job seeker service.</li>
                <li>Job provider service</li>
            </ol>
            <p>
                There are two main parties in our web site. We provide a platform for both job seeker and the job
                provider.
                Job seeker can search any kind of a job and can apply for the job through our web site.
                Job provider can post any kind of a job and can contact with the seeker, download the CV.
            </p>
        </div>
        <div class="aboutImgDiv">
            <img src="../../assets/images/aboutUs.png" alt="aboutUs Image" id="abtImg">
        </div>
    </div>

    <!--    about us content end-->


    <!--    footer start-->
    <?php
    include '../../includes/common/seekerFooter.php';
    ?>
    <!--    footer end-->
</main>
</body>
</html>