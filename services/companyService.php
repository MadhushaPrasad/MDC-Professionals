<?php
session_start();
require "../config/DBConnection.php";

//add new Company
if (isset($_POST['btnAdd'])) {
    $targetDir = '..\..\MDC-Professionals\assets\images\upload\\';
    $target_file = $targetDir . basename($_FILES["profileImage"]["name"]);
    if (isset($_FILES["profileImage"])) {
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
            $image = $_FILES["profileImage"]["name"];
            $providerID = $_POST['provider_ID'];
            $companyName = $_POST['comName'];
            $email = $_POST['email'];
            $web_url = $_POST['web_url'];
            $description = $_POST['description'];
            $comAddress = $_POST['comAddress'];
            $status = $_POST['status'];
            $category = $_POST['category'];
            if (!(empty($providerID || $image || $companyName || $email || $web_url ||
                $description || $comAddress || $status || $category))) {
                switch ($status) {
                    case 1:
                        $status = "Available";
                        break;
                    case 2:
                        $status = "Close";
                        break;
                    case 3:
                        $status = "Open";
                        break;
                    default:
                        $status = "Pending";
                }
                $query = "INSERT INTO company (p_ID ,image,company_name,email,web_url,address,description,status) 
                    VALUES('$providerID','$image','$companyName','$email','$web_url','$comAddress','$description','$status')";
                $response = $connection->query($query);
                if ($response > 0 && $connection->affected_rows > 0) {
                    $_SESSION['message'] = "Company Add Successfully";
                    header("location:/MDC-Professionals/pages/admin/admin-company-page.php");
                } else {
                    $_SESSION['message'] = "Company Not Add Successfully";
                    header("location:/MDC-Professionals/pages/admin/admin-company-page.php");
                }
            } else {
                $_SESSION['message'] = "Something wrong please check again.!";
                header("location:/MDC-Professionals/pages/admin/admin-company-page.php");
            }
        } else {
            $_SESSION['message'] = "Something wrong please check again.!";
            header("location:/MDC-Professionals/pages/admin/admin-company-page.php");
        }
    } else {
        $_SESSION['message'] = "Something wrong please check again.!";
        header("location:/MDC-Professionals/pages/admin/admin-company-page.php");
    }
}


//update Company
if (isset($_POST['update'])) {
    $targetDir = '..\..\MDC-Professionals\assets\images\upload\\';
    $target_file = $targetDir . basename($_FILES["profileImage"]["name"]);
    if (isset($_FILES["profileImage"])) {
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
            $companyIDs = $_SESSION['companyID'];
            $image = $_FILES["profileImage"]["name"];
            $providerID = $_POST['provider_ID'];
            $companyName = $_POST['comName'];
            $email = $_POST['email'];
            $web_url = $_POST['web_url'];
            $description = $_POST['description'];
            $comAddress = $_POST['comAddress'];
            $status = $_POST['status'];
            $category = $_POST['category'];

            if (!(empty($providerID || $image || $companyName || $email || $web_url ||
                $description || $comAddress || $status || $category || $companyIDs))) {
                switch ($status) {
                    case 1:
                        $status = "Available";
                        break;
                    case 2:
                        $status = "Close";
                        break;
                    case 3:
                        $status = "Open";
                        break;
                    default:
                        $status = "Pending";
                }
                $query = "UPDATE company SET p_ID = '$providerID' ,image = '$image',company_name = '$companyName',
                            email = '$email',web_url = '$web_url',address = '$comAddress',description = '$description',
                            status='$status' WHERE company_ID = '$companyIDs'";
                $response = $connection->query($query);
                if ($response > 0 && $connection->affected_rows > 0) {
                    echo "done";
                    $_SESSION['message'] = "Company Update Successfully";
                    $_SESSION['companyID'] = null;
                    header("location:/MDC-Professionals/pages/admin/admin-company-page.php");
                } else {
                    $_SESSION['message'] = "Company Not Update Successfully! Please Click Edit button on table before Update.!";
                    $_SESSION['companyID'] = null;
                    header("location:/MDC-Professionals/pages/admin/admin-company-page.php");
                }
            } else {
                $_SESSION['message'] = "Something wrong please check again.! Please Click Edit button on table before Update.!";
                header("location:/MDC-Professionals/pages/admin/admin-company-page.php");
                echo "Some variable is empty";
            }
        } else {
            $_SESSION['message'] = "Something wrong please upload your company Image again.!";
            header("location:/MDC-Professionals/pages/admin/admin-company-page.php");
            echo "imagge not uploaded";
        }
    } else {
        $_SESSION['message'] = "Something wrong please upload your company Image again.!";
        header("location:/MDC-Professionals/pages/admin/admin-company-page.php");
        echo "File element empty";
    }
}