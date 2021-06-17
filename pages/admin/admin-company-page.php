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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

<?php
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}
?>
<script>
    switch ("<?php echo $message?>") {
        case "Company Delete Successfully":
            swal({
                title: "Successfully",
                text: "<?php echo $message?>",
                icon: "success",
            });
        <?php $_SESSION['message'] = ""?>
            break;
        case "Company Not Delete Successfully":
            swal({
                title: "Warning",
                text: "<?php echo $message?>",
                icon: "error",
            });
        <?php $_SESSION['message'] = ""?>
            break;
        case "Company Add Successfully":
            swal({
                title: "Successfully",
                text: "<?php echo $message?>",
                icon: "success",
            });
        <?php $_SESSION['message'] = ""?>
            break;
        case "Company Not Add Successfully":
            swal({
                title: "Warning",
                text: "<?php echo $message?>",
                icon: "error",
            });
        <?php $_SESSION['message'] = ""?>
            break;
        case "Something wrong please check again.!":
            swal({
                title: "Warning",
                text: "<?php echo $message?>",
                icon: "error",
            });
        case "Please Click Edit button on table before Update.!":
            swal({
                title: "Warning",
                text: "<?php echo $message?>",
                icon: "error",
            });
        <?php $_SESSION['message'] = ""?>
            break;
        case "Something wrong please check again.! Please Click Edit button on table before Update.!":
            swal({
                title: "Warning",
                text: "<?php echo $message?>",
                icon: "error",
            });
        <?php $_SESSION['message'] = ""?>
            break;
        case "Company Update Successfully":
            swal({
                title: "Success",
                text: "<?php echo $message?>",
                icon: "success",
            });
        <?php $_SESSION['message'] = ""?>
            break;
        case "Company Not Update Successfully! Please Click Edit button on table before Update.!":
            swal({
                title: "Warning",
                text: "<?php echo $message?>",
                icon: "error",
            });
        <?php $_SESSION['message'] = ""?>
            break;
        case "Something wrong please upload your company Image again.!":
            swal({
                title: "Warning",
                text: "<?php echo $message?>",
                icon: "error",
            });
        <?php $_SESSION['message'] = ""?>
            break;
        default:
    }
</script>
</body>
</html>
