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
    <link rel="stylesheet" href="../../assets/css/seekerHeader.css">
    <link rel="stylesheet" href="../../assets/css/header-image.css">
    <link rel="stylesheet" href="../../assets/css/searchCategory.css">
    <link rel="stylesheet" href="../../assets/css/jobRate.css">
    <link rel="stylesheet" href="../../assets/css/popular-company-list.css">
    <link rel="stylesheet" href="../../assets/css/success-stories.css">
    <link rel="stylesheet" href="../../assets/css/seekerFooter.css">
    <title>MDC | Seeker Home Page</title>
</head>
<body>
<!--header start-->
<?php
include '../../includes/common/seekerHeader.php';
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
                <small>JOB SERVICES</small>
            </p>
            <h2>Recent Jobs</h2>
        </div>
        <div class="serviceCardList">
            <div class="box">
                <div class="img">
                    <img src="../../assets/images/job-card-image.png" alt="image">
                </div>
                <br>
                <h2>Webflow Developer Needed</h2><br>
                <p> Hello, i am lookimng for a webflow expert to work part time.
                    At first, it will be small edits here & there, but lookong for a
                    long term partnership as more projects come in.</p><br>

                <div class="btn">
                    <a href="#@#@#@">SEE MORE</a>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="../../assets/images/job-card-image.png" alt="image">
                </div>
                <br>
                <h2>Webflow Developer Needed</h2><br>
                <p> Hello, i am lookimng for a webflow expert to work part time.
                    At first, it will be small edits here & there, but lookong for a
                    long term partnership as more projects come in.</p><br>

                <div class="btn">
                    <a href="#@#@#@">SEE MORE</a>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="../../assets/images/job-card-image.png" alt="image">
                </div>
                <br>
                <h2>Webflow Developer Needed</h2><br>
                <p> Hello, i am lookimng for a webflow expert to work part time.
                    At first, it will be small edits here & there, but lookong for a
                    long term partnership as more projects come in.</p><br>

                <div class="btn">
                    <a href="#@#@#@">SEE MORE</a>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <img src="../../assets/images/job-card-image.png" alt="image">
                </div>
                <br>
                <h2>Webflow Developer Needed</h2><br>
                <p> Hello, i am lookimng for a webflow expert to work part time.
                    At first, it will be small edits here & there, but lookong for a
                    long term partnership as more projects come in.</p><br>

                <div class="btn">
                    <a href="#@#@#@">SEE MORE</a>
                </div>
            </div>
        </div>
        <div class="pagination">
            <a href="#">Prev</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">Next</a>
        </div>
    </div>

    <!--    biography div start-->

    <!--    finding job rate start-->
    <?php
    include '../../includes/jobRate.php';
    ?>
    <!--    finding job rate end-->

    <!--    POPULAR COMPANY LIST START-->
    <?php
    include '../../includes/popular-company-list.php';
    ?>
    <!--    POPULAR COMPANY LIST END-->

    <!--    SUCCESS STORIES LIST START-->
    <?php
    include '../../includes/success-stories.php';
    ?>
    <!--    SUCCESS STORIES LIST END-->

    <!--    footer start-->
    <?php
    include '../../includes/common/seekerFooter.php';
    ?>
    <!--    footer end-->
</main>

<script src="../../assets/js/collapseButton.js"></script>
<script src="../../assets/js/seekerHeader.js"></script>
<script src="../../assets/js/circularProgressBar.js"></script>
</body>
</html>