<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    google font css-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--    custom css-->
    <link rel="stylesheet" href="../../assets/css/seekerHome.css">
    <link rel="stylesheet" href="../../assets/css/header.css">
    <link rel="stylesheet" href="../../assets/css/header-image.css">
    <link rel="stylesheet" href="assets/css/searchCategory.css">
    <link rel="stylesheet" href="assets/css/jobRate.css">
    <link rel="stylesheet" href="assets/css/popular-company-list.css">
    <link rel="stylesheet" href="assets/css/success-stories.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>MDC | Seeker Home Page</title>
</head>
<body>
<!--header start-->
<?php
include '../../includes/common/header.php';
?>
<!--header end-->

<!--main content-->
<main>
    <!--    header images start-->
    <?php
    include '../../includes/header-image.php';
    ?>
    <!--    header images end-->

    <!--    search category start-->
    <?php
    include '../../includes/searchCategory.php';
    ?>
    <!--    search category end-->

    <!--    biography div start-->
    <div class="bioDiv">
        <div class="imgDiv">
            <img src="../../assets/images/whoWeAre.png" alt="Who we are">
        </div>
        <div class="infoDiv">
            <p>
                <small>Biography</small>
            </p>
            <h2>Who We Are</h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.

                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged.

                It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>

    <!--    biography div start-->

    <!--    biography div start-->
    <div class="ouerServiceDiv">
        <div class="ouerServiceHeaderDiv">
            <p>
                <small>Our Service</small>
            </p>
            <h2>What We Offer</h2>
        </div>
        <div class="serviceCardList">
            <div class="card">
                <div class="topDiv">
                    <img src="../../assets/images/job_provider_large.png" alt="img">
                </div>
                <div class="info">
                    <h4><b>JOB PROVIDER SERVICES</b></h4>
                    <p>The job provider is the person who provides jobs from our website. The provider needs to register
                        as a job provider on our website. Through our web site job providers can post their jobs and
                        find job seekers, and also can download the CV. In addition we provide the job providers a
                        contact service that helps the job providers to contact with the job seekers. </p>
                    <button>see more</button>
                </div>
            </div>
            <div class="card">
                <div class="topDiv">
                    <img src="../../assets/images/job_SeekerLarge.png" alt="img">
                </div>
                <div class="info">
                    <h4><b>JOB SEEKER SERVICES</b></h4>
                    <p>The job seeker is the person who searches for jobs from our website. The job seeker needs to
                        login to the website. Through our web site job seekers can search any kind of a job and apply
                        for the job , and also can upload a CV. In addition we provide the job seekers a contact service
                        that helps the seeker to contact with the provider.</p>
                    <button>see more</button>
                </div>
            </div>
        </div>
    </div>

    <!--    biography div start-->

    <!--    finding job rate start-->
    <?php
    include 'includes/jobRate.php';
    ?>
    <!--    finding job rate end-->

    <!--    POPULAR COMPANY LIST START-->
    <?php
    include 'includes/popular-company-list.php';
    ?>
    <!--    POPULAR COMPANY LIST END-->

    <!--    SUCCESS STORIES LIST START-->
    <?php
    include 'includes/success-stories.php';
    ?>
    <!--    SUCCESS STORIES LIST END-->

    <!--    footer start-->
    <?php
    include 'includes/common/footer.php';
    ?>
    <!--    footer end-->
</main>

<script src="../../assets/js/collapseButton.js"></script>
<script src="../../assets/js/header.js"></script>
<script src="../../assets/js/circularProgressBar.js"></script>
</body>
</html>