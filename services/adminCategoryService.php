<?php
session_start();
require "../config/DBConnection.php";

if (isset($_POST['addCategory'])) {
    $category = $_POST['categoryName'];
    $subSategory = $_POST['Sub-Category'];
    if (!(empty($category || $subSategory))) {
        $sqlQuery = "INSERT INTO main_category (category_name) VALUES ('$category')";
        $response = $connection->query($sqlQuery);
        if ($response > 0 && $connection->affected_rows > 0) {
            $categoryID = $connection->insert_id;
            if (!(empty($categoryID))) {
                $sqlQuery = "INSERT INTO sub_category (category_name,category_ID) VALUES ('$subSategory','$categoryID')";
                $response = $connection->query($sqlQuery);
                if ($response > 0 && $connection->affected_rows) {
                    $_SESSION['message'] = "Category Added Successfully";
                    header("location:/MDC-Professionals/pages/admin/admin-category-page.php");
                } else {
                    $_SESSION['message'] = "Something Wrong Category Not Added";
                    header("location:/MDC-Professionals/pages/admin/admin-category-page.php");
                }
            }
            $_SESSION['message'] = "Something Wrong Category Not Added";
            header("location:/MDC-Professionals/pages/admin/admin-category-page.php");
        }
    } else {
        $_SESSION['message'] = "Please Input Data to add category";
        header("location:/MDC-Professionals/pages/admin/admin-category-page.php");
    }
}
