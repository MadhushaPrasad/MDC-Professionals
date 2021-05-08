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
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/searchCategory.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>MDC | Home Page</title>
</head>
<body>
<!--header-->
<?php
include 'includes/common/header.php';
?>

<!--main content-->
<main>
    <!--header image start-->
    <div class="big-image">
        <div class="overlay">
            <h2>
                You run your business. <br>
                We’ll hanle your bookkeeping
            </h2>
            <p>
                <small><b>
                        Get a professional bookkeeper at a fraction of the cost of a<br>
                        bookkeeping firm, and powerful online accounting software<br>
                        with zero learning curve.</b></small>
            </p>
        </div>
    </div>
    <!--header image End-->
    <!--    search category start-->
    <?php
    include 'includes/searchCategory.php';
    ?>
    <!--    search category end-->

</main>
<script src="assets/js/collapseButton.js"></script>
</body>
</html>