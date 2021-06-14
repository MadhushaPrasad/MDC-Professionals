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
    <!--    google font css-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--    custom css-->

    <link rel="stylesheet" href="../../assets/css/providerHeader.css">
    <link rel="stylesheet" href="../../assets/css/header-image.css">
    <link rel="stylesheet" href="../../assets/css/providerFooter.css">
    <link rel="stylesheet" href="../../assets/css/providerPayment.css">
    <title>MDC | Provider Payment Page</title>
</head>
<body>
<!--header start-->
<?php
include '../../includes/common/providerHeader.php';
?>
<!--header end-->

<!--main content-->
<main>
    <!-- header images start-->
    <?php
    include '../../includes/header-image.php';
    ?><br>
    <!--    header images end -->

    <div class="paymaincontainer">

        <h1> PAYMENT </h1>

        <div class="paycontainer">

            <form action="">

                <div class="tik">
                    <input type="radio" name="choose" id="visa"><label for="seaker">VISA</label>
                    <input type="radio" name="choose" id="master"><label for="provider">MASTER</label>
                    <input type="radio" name="choose" id="paypal"><label for="admin">PAYPAL</label>
                </div>

                <div class="in"></div>
                <div id="inputDiv">
                    <div class="inputDiv">
                        <input type="text" id="cNmuber" name="cNmuber" placeholder="Card Number" required>
                    </div>
                    <div class="inputDiv">
                        <input type="text" id="exDate" name="exDate" placeholder=" Expire Date" required>
                    </div>
                </div>
                <div id="inputDiv">
                    <div class="inputDiv">
                        <input type="email" id="sCode" name="sCode" placeholder="Security Code" required>
                    </div>
                    <div class="inputDiv">
                        <input type="text" id="pAmount" name="pAmount" placeholder=" Payment Amount" required>
                    </div>
                </div>

                <button type="submit">Send</button>
        </div>
        </form>

    </div>

    </div>

    <!--    footer start-->
    <?php
    include '../../includes/common/providerFooter.php';
    ?>
    <!--    footer end-->
</main>

<script src="../../assets/js/collapseButton.js"></script>
<script src="../../assets/js/seekerHeader.js"></script>

</body>
</html>