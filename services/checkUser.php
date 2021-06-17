<?php
session_start();
require "../config/DBConnection.php";
if (isset($_POST['login'])) {
    $userType = $_POST['choose'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($userType == 'seeker') {
        if (!(empty($email && $password))) {
            $registeredUser = $connection->query("SELECT u_id,email,password FROM user_r WHERE email = '$email' && password = '$password'");
            $user = $registeredUser->fetch_assoc();
            if (isset($user['u_id'])) {
                $userID = $user['u_id'];
                $registeredUser = $connection->query("SELECT * FROM seeker WHERE u_ID = '$userID'");
                $user = $registeredUser->fetch_assoc();
                if (isset($user['s_ID'])) {
                    setcookie("email", $user['email'], time() + (60 * 60 * 24 * 7));
                    setcookie("pass", $user['password'], time() + (60 * 60 * 24 * 7));
                    setcookie("type", "Seeker", time() + (60 * 60 * 24 * 7));

                    $_SESSION["email"] = $_COOKIE['email'];
                    $_SESSION["password"] = $_COOKIE['pass'];
                    $_SESSION["userType"] = $_COOKIE['type'];
                    $_SESSION['userID'] = $userID;
                    header('location:/MDC-Professionals/pages/seeker/seekerHomepage.php');
                } else {
                    header('location:/MDC-Professionals/pages/login.php');
                }
            } else {
                $_SESSION['message'] = "Your not a User in our database please register Or reEnter details again..!";
                header('location:/MDC-Professionals/pages/login.php');
            }
        }
    } else if ($userType == 'provider') {
        if (!(empty($email && $password))) {
            $registeredUser = $connection->query("SELECT u_id,email,password FROM user_r WHERE email = '$email' && password = '$password'");
            $user = $registeredUser->fetch_assoc();
            if (isset($user['u_id'])) {
                $userID = $user['u_id'];
                $registeredUser = $connection->query("SELECT * FROM provider WHERE u_ID = '$userID'");
                $user = $registeredUser->fetch_assoc();
                if (isset($user['p_ID'])) {
                    setcookie("email", $user['email'], time() + (60 * 60 * 24 * 7));
                    setcookie("pass", $user['password'], time() + (60 * 60 * 24 * 7));
                    setcookie("type", "Provider", time() + (60 * 60 * 24 * 7));

                    $_SESSION["email"] = $_COOKIE['email'];
                    $_SESSION["password"] = $_COOKIE['pass'];
                    $_SESSION["userType"] = $_COOKIE['type'];
                    $_SESSION['userID'] = $userID;
                    header('location:/MDC-Professionals/pages/provider/providerHomepage.php');
                } else {
                    header('location:/MDC-Professionals/pages/login.php');
                }
            } else {
                header('location:/MDC-Professionals/pages/login.php');
            }
        }
    } else {
        if (!(empty($email && $password))) {
            if (!(empty($email && $password))) {
                $registeredUser = $connection->query("SELECT u_id,email,password FROM user_r WHERE email = '$email' && password = '$password'");
                $user = $registeredUser->fetch_assoc();
                if (isset($user['u_id'])) {
                    $userID = $user['u_id'];
                    $registeredAdmin = $connection->query("SELECT * FROM admin WHERE u_ID = '$userID'");
                    $admin = $registeredAdmin->fetch_assoc();
                    if (isset($admin['ad_id'])) {

                        setcookie("email", $user['email'], time() + (60 * 60 * 24 * 7));
                        setcookie("pass", $user['password'], time() + (60 * 60 * 24 * 7));
                        setcookie("type", "Admin", time() + (60 * 60 * 24 * 7));

                        $_SESSION["email"] = $_COOKIE['email'];
                        $_SESSION["password"] = $_COOKIE['pass'];
                        $_SESSION["userType"] = $_COOKIE['type'];
                        $_SESSION['userID'] = $userID;
                        header('location:/MDC-Professionals/pages/admin/dashboard.php');
                    } else {
                        $_SESSION['message'] = "Your not a User in our database please register Or reEnter details again..!";
                        header('location:/MDC-Professionals/pages/login.php');
                    }
                } else {
                    $_SESSION["message"] = "Your not a User in our database please register Or reEnter details again..!";
                    header('location:/MDC-Professionals/pages/login.php');
                }
            }
        }
    }
}