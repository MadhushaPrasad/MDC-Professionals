<?php

    //connecting the database
    $conn = mysqli_connect("localhost", "root", "", "mdc");
    if(!$conn) {
        echo 'connection error';
    }


    //array top store the errors
    $errors = ['User_name'=>'', 'First_Name'=>'', 'Last_Name'=>'', 'Address'=>'', 'Date_Of_Birth'=>'', 'Phone'=>'', 'Email'=>'', 'Password'=>''];
    
    //array to store the data
    $data = ['User_name'=>'', 'First_Name'=>'', 'Last_Name'=>'', 'Address'=>'', 'Date_Of_Birth'=>'', 'Phone'=>'', 'Email'=>'', 'Password'=>''];

    //cheking for empty fields and take the data to array
    if(isset($_POST['submit'])) {
    //check for Image upload
        if(empty($_FILES['Image']['name'])) {
            $errors['Image'] = 'Image is required';
        } else {
            if($_FILES['Stu_image']['size'] < 20971520) {
                $Stu_image_type = strtolower($_FILES['Stu_image']['type']);
                $Stu_image_type = explode('/', $Stu_image_type);
                $Stu_image_type = $Stu_image_type['1'];
                //echo $Stu_image_type;
                if($Stu_image_type == 'jpg' || $Stu_image_type == 'jpeg' || $Stu_image_type == 'png') {
                    $File_temp_location = $_FILES['Stu_image']['tmp_name'];
                    echo $File_temp_location;
                } else {
                    $errors['Image'] = 'You cannot upload this type of files';
                }
            } else {
                $errors['Image'] = 'File is large';
            }
        }

        //check the user name data
        if(empty($_POST['User_name'])) {
                $errors['User_name'] = 'User Name is empty';
        } else {
            $User_name = mysqli_real_escape_string($conn, $_POST['User_name']);
            $data['User_name'] = $User_name;
        }

        //check the First name data
        if(empty($_POST['First_Name'])) {
            $errors['First_Name'] = 'First Name is required';
        } else {
            $First_Name = mysqli_real_escape_string($conn, $_POST['First_Name']);
            $data['First_Name'] = mysqli_real_escape_string($conn, $_POST['First_Name']);
        }

        //check the Last name data
        if(empty($_POST['Last_Name'])) {
            $errors['Last_Name'] = 'Last Name is required';
        } else {
            $Last_Name = mysqli_real_escape_string($conn, $_POST['Last_Name']);
            $data['Last_Name'] = mysqli_real_escape_string($conn, $_POST['Last_Name']);
        }

        //check the address
        if(empty($_POST['Address'])) {
            $errors['Address'] = 'Address is required';
        } else {
            $Address = mysqli_real_escape_string($conn, $_POST['Address']);
            $data['Address'] = $Address;
        }

        //check the date of birth
        if(empty($_POST['Date_Of_Birth'])) {
            $errors['Date_Of_Birth'] = 'Date of Birth is required';
        } else {
            $Date_Of_Birth = mysqli_real_escape_string($conn, $_POST['Date_Of_Birth']);
            $data['Date_Of_Birth'] = $Date_Of_Birth;
        }

        //check the phone number
        if(empty($_POST['Phone'])) {
            $errors['Phone'] = 'Phone number is required';
        } else {
            $Phone = mysqli_real_escape_string($conn, $_POST['Phone']);
            $data['Phone'] = $Phone;
        }

        //check the email
        if(empty($_POST['Email'])) {
            $errors['Email'] = 'Email is required';
        } else {
            $Email = mysqli_real_escape_string($conn, $_POST['Email']);
            $data['Email'] = $Email;
        }

        //check the password
        if(empty($_POST['Password'])) {
            $errors['Password'] = 'Password is required';
        } else {
            $Password = mysqli_real_escape_string($conn, $_POST['Password']);
            $data['Password'] = $Password;
        }

    }

    //enter the data to database
    if(array_filter($errors)) {
        print_r($errors);
    } else {
        print_r($data);
        //enter the data to database
    }




?>