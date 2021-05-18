<?php

$email = $_POST['email'];

if (empty($email)) {
    header('location:/MDC-Professionals/pages/forget_password.php');
} else {
    header('location:/MDC-Professionals/pages/reset_password.php');
}



