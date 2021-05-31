<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDC | Admin Dashboard</title>
    <!--    google font css-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--    custom css-->
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link rel="stylesheet" href="../../assets/css/adminHeader.css">
    <link rel="stylesheet" href="../../assets/css/adminSlideMenu.css">
    <link rel="stylesheet" href="../../assets/css/admin-company.css">
    <link rel="stylesheet" href="../../assets/css/adminFooter.css">
</head>
<body>
<!--header start-->
<?php
include '../../includes/common/adminHeader.php';
?>
<!--header end-->
<!--slide menu start-->
<?php
include '../../includes/common/adminSlideMenu.php';
?>
<!--slide menu end-->

<main>
    <!--provider start-->
    <?php
    include '../../includes/admin/admin-company.php';
    ?>
    <!--provider end-->
</main>
<!--slide menu start-->

<?php
include '../../includes/common/adminFooter.php';
?>
<!--slide menu end-->
</body>
</html>