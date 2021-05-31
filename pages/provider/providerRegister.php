<?php

    //connecting the database
    $conn = mysqli_connect("localhost", "root", "", "mdc");
    if(!$conn) {
        echo 'connection error';
    }

        //taking the data into variables
        if(isset($_POST['submit'])){
            //$Image =  $_FILES['Image']['name'];
            //echo $Image;
            $User_Name = mysqli_real_escape_string($conn, $_POST['User_Name']);
            $First_Name = mysqli_real_escape_string($conn, $_POST['First_Name']);
            $Last_Name = mysqli_real_escape_string($conn, $_POST['Last_Name']);
            $Address = mysqli_real_escape_string($conn, $_POST['Address']);
            $Date_Of_Birth = mysqli_real_escape_string($conn, $_POST['Date_Of_Birth']);
            $Phone_Number = mysqli_real_escape_string($conn, $_POST['Phone_Number']);
            $Email = mysqli_real_escape_string($conn, $_POST['Email']);
            $Password = mysqli_real_escape_string($conn, $_POST['Password']);
    
            $mysql_insert_data = "INSERT INTO user_r (user_name, email, first_name, last_name, address, password) VALUES ('$User_Name', '$Email', '$First_Name', '$Last_Name', '$Address', '$Password')"; 
            mysqli_query($conn, $mysql_insert_data);
    
    
        }
    




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDC | Provider Register Page</title>
    <link rel="stylesheet" href="../../assets/css/providerRegister.css">
</head>
<body>
<main>
    <div class="formDiv">
        <div class="container">
            <img src="../../assets/images/small-logo.png" alt="image">
            <div class="form">
                <form action="ProviderRegister.php" method="post">
                <input type="file" name="Image" value="Image" id="profile-image" placeholder="Choose a Profile image" required=""
                           capture>
                    <input type="text" name="User_Name" placeholder="User_Name" required>
                    <input type="text" name="First_Name" placeholder="First_Name" required>
                    <input type="text" name="Last_Name" placeholder="Last_Name" required>
                    <input type="text" name="Address" placeholder="Address" required>
                    <input type="text" name="Date_Of_Birth" placeholder="Date_Of_Birth"
                           onfocus="(this.type='date')"
                           required>
                    <input type="text" name="Phone_Number" placeholder="Phone_Number" required>
                    <input type="email" name="Email" placeholder="Email" required>
                    <input type="password" name="Password" placeholder="Password" required>
                    <input type="password" placeholder="Confirm Password" required>
                    <button type="submit" name="submit" value="submit">Sign Up</button>
                    <p>Having Account Yet?</p>
                    <a href="../login.php">Login</a>
                </form>
            </div>
        </div>
    </div>
    <div class="imgDiv">
        <div class="headerText">
            <p>Enter your data</p>
            <p>For</p>
            <p>Register</p>
        </div>
        <img src="../../assets/images/login-image.png" alt="image">
    </div>
</main>
</body>
</html>