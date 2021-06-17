<?php
session_start();
require "../config/DBConnection.php";

if (isset($_POST['submit'])) {
    $targetDir = '..\..\MDC-Professionals\assets\images\upload\\';
    $target_file = $targetDir . basename($_FILES["profileImage"]["name"]);
    if (isset($_FILES["profileImage"])) {
        if (move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
            $Image = $_FILES["profileImage"]["name"];
            $User_Name = $_POST['User_Name'];
            $First_Name = $_POST['First_Name'];
            $Last_Name = $_POST['Last_Name'];
            $Address = $_POST['Address'];
            $Phone_Number = $_POST['Phone_Number'];
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];
            $ComPassword = $_POST['con-Password'];
            $status = "online";
            if ((!(empty($User_Name || $First_Name || $Last_Name || $Address ||
                    $Phone_Number || $Email || $Password || $ComPassword || $status))) && ($Password == $ComPassword)) {

                $mysql_insert_data = "INSERT INTO user_r (image,user_name, email, first_name, last_name, address, password,status)
                           VALUES ('$Image','$User_Name', '$Email', '$First_Name', '$Last_Name', '$Address', '$Password','$status')";

                $newProvider = $connection->query($mysql_insert_data);
                if ($newProvider > 0 && $connection->affected_rows > 0) {

                    $userID = $connection->insert_id;
                    $mysql_insert_data = "INSERT INTO provider (u_id) VALUES ('$userID')";
                    $newUser = $connection->query($mysql_insert_data);

                    if ($newUser > 0 && $connection->affected_rows > 0) {
                        $_SESSION['message'] = "Success";
                        header("location:/MDC-Professionals/pages/login.php");
                    } else {
                        $_SESSION['message'] = "Fail";
                        header("location:/MDC-Professionals/pages/provider/providerRegister.php");
                    }
                } else {
                    $_SESSION['message'] = "Fail";
                    header("location:/MDC-Professionals/pages/provider/providerRegister.php");
                }
            } else {
                $_SESSION['message'] = "Fail";
                header("location:/MDC-Professionals/pages/provider/providerRegister.php");
            }

        } else {
            $_SESSION['message'] = "Fail";
            header("location:/MDC-Professionals/pages/provider/providerRegister.php");
        }
    } else {
        $_SESSION['message'] = "Fail";
        header("location:/MDC-Professionals/pages/provider/providerRegister.php");
    }
}

/*

   if ((!(empty($First_Name || $Last_Name || $Address || $Date_Of_Birth || $Phone_Number || $Email
           || $Password || $ComPassword))) && ($password == $ComPassword)) {

       $mysql_insert_data = "INSERT INTO user_r (image,user_name, email, first_name, last_name, address, password,status)
                           VALUES ('$Image','$User_Name', '$Email', '$First_Name', '$Last_Name', '$Address', '$Password','$status')";

       $newUser = $connection->query($mysql_insert_data);

       if ($newUser > 0 && $connection->affected_rows > 0) {

           $userID = $connection->insert_id;
           $mysql_insert_data = "INSERT INTO provider (u_id) VALUES ('$userID')";
           $newUser = $connection->query($mysql_insert_data);

           if ($newUser > 0 && $connection->affected_rows > 0) {
               header("location:/MDC-Professionals/pages/login.php");
           }

       } else {
           echo '<script>
            swal({
                       title: "Warning",
                       text: "Something Wrong. Please Login Again!",
                       icon: "error",
                   });
           </script>';
           header("location:/MDC-Professionals/pages/provider/providerRegisterService.php");
       }
   } else {*/
//                        echo '<script>
//                             swal({
//                                        title: "Warning",
//                                        text: "Something Wrong. Please Login Again!",
//                                        icon: "error",
//                                    });
//                            </script>';
//                        header("location:/MDC-Professionals/pages/provider/providerRegisterService.php");
/* echo "Error";
}*/