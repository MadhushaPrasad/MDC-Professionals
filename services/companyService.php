<?php

//Linking the config file
require "../config/DBConnection.php";

$method = $_SERVER["REQUEST_METHOD"];

/*switch ($method) {
    case 'GET':
        $action = $_GET['action'];
        switch ($action) {
            case 'delete':
                break;
            case 'search':
                $companyId = $_POST['companyID'];
                echo $companyId;
//                $res = $connection->query("SELECT * FROM student");
//                echo $res;
                break;
            case 'getAll':
                break;
        }
        break;
    case 'POST':
        $action = $_GET['action'];
        switch ($action) {
            case 'add':
                break;
            case 'update':
                break;
        }
        break;
}*/

//search Company
if (isset($_GET['companySearchId'])) {
    $companyID = $_GET['companyID'];
    echo $companyID;
    $searchQuery = "SELECT * FROM student WHERE id = $companyID";
    $student = $connection->query($searchQuery);
    $resultSet = $student->fetch_assoc();
    json_encode($resultSet);
}