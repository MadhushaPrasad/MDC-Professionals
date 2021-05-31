<?php
//    include_once '../config/DBConnection.php';
//
////get All job companies
//function getAllCompanies()
//{
//    global $connection;
//    $companyQuery = 'SELECT * FROM company';
//    $companyList = $$connection->query($companyQuery);
//    while ($resultSet = $companyList->fetch_assoc_all()) {
//        echo ' <tr>' .
//            '<td>' . $resultSet['company_ID'] . '</td>' .
//            '<td>' . $resultSet['p_ID'] . '</td>' .
//            '<td>' . ' <img src="../../assets/images/upload/' . $resultSet['image']
//            . '" alt="seekerProfile" width="50px" height="50px"
//                         style="background-position: 50% 50%;background-size: cover;">' . '</td>' .
//            '<td>' . $resultSet['company_name'] . '</td>' .
//            '<td>' . $resultSet['email'] . '</td>' .
//            '<td>' . $resultSet['web_url'] . '</td>' .
//            '<td>' . $resultSet['address'] . '</td>' .
//            '<td>' . $resultSet['description'] . '</td>' .
//            '<td>' . $resultSet['status'] . '</td>' .
//            '<td>' .
//            '&nbsp; &nbsp;<i class="fas fa-trash-alt" style="color: red;cursor: pointer;"></i>&nbsp; &nbsp;' .
//            '<i class="fas fa-edit" style="color: #F0BB11;cursor: pointer;"></i> &nbsp; &nbsp;' .
//            '</td>' .
//            '</tr>';
//    }
//}
//
//
//$method = $_SERVER["REQUEST_METHOD"];
//switch ($method) {
//    case "GET":
//        $action = $_GET["btnType"];
//        switch ($action) {
//            case 'search':
//                $companyID = $_GET['companyID'];
//                if (empty($companyID)) {
//                    echo '<script>alert("Company ID Is not Entered");document.location.href="../pages/admin/admin-company-page.php"</script>';
//                } else {
//                    $companyListQuery = "SELECT * FROM company WHERE company_ID = $companyID";
//                    $companyList = $connection->query($companyListQuery);
//                    $resultSet = $companyList->fetch_assoc();
//                    echo json_encode($resultSet);
//                }
//                break;
//            case 'delete':
//                $companyID = $_GET['companyID'];
//                break;
//            default:
//                break;
//        }
//        break;
//    case "POST":
//        $action = $_GET["btnType"];
//        switch ($action) {
//            case 'add':
//                $providerID = $_POST['provider_ID'];
//                $providerName = $_POST['comName'];
//                $email = $_POST['email'];
//                $web_url = $_POST['web_url'];
//                $description = $_POST['description'];
//                $comAddress = $_POST['comAddress'];
//                $status = $_POST['status'];
//                $category = $_POST['category'];
//
//                if (!(empty($providerID || $providerName || $email || $web_url ||
//                    $description || $comAddress || $status || $category))) {
//                    echo 'hello';
//                }else{
//                    echo 'hi';
//                }
//
//                break;
//            case 'update':
//
//                break;
//            default:
//                break;
//        }
//        break;
//}

/*if (isset($_POST['btnAdd'])) {
   /* $providerID = $_POST['provider_ID'];
    $providerName = $_POST['comName'];
    $email = $_POST['email'];
    $web_url = $_POST['web_url'];
    $description = $_POST['description'];
    $comAddress = $_POST['comAddress'];
    $status = $_POST['status'];
    $category = $_POST['category'];*/

/*    if (!(empty($_POST['provider_ID'] || $_POST['comName'] || $_POST['email'] || $_POST['web_url'] ||
        $_POST['description'] || $_POST['comAddress'] || $_POST['status'] || $_POST['category']))) {

    } else {
        echo '<script>
                swal({
                  title: "Oops...",
                  text: "Can not Add a company without entering data!",
                  icon: "error",
                });
               </script>';
    }
}*/

/*if (isset($_POST['btnAdd'])) {
    $providerID = $_POST['provider_ID'];
    $providerName = $_POST['comName'];
    $email = $_POST['email'];
    $web_url = $_POST['web_url'];
    $description = $_POST['description'];
    $comAddress = $_POST['comAddress'];
    $status = $_POST['status'];
    $category = $_POST['category'];

    if (!(empty($providerID || $providerName || $email || $web_url ||
        $description || $comAddress || $status || $category))) {

    } else {
        echo '<script>
                swal({
                  title: "Oops...",
                  text: "Can not Add a company without entering data!",
                  icon: "error",
                });
               </script>';

//        header('location:/MDC-Professionals/pages/admin/admin-company-page.php');
    }
}*/