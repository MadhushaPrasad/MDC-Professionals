<?php
session_start();

if ((empty($_SESSION['email'] || $_SESSION['password'] || $_SESSION['userType']))) {
    header('location:/MDC-Professionals/pages/login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Details </title>

    <style>
        *{
            margin: 0;
            padding: 19;
            box-sizing: border-box;
            background: yellow;
            font-family: 'poppins', sans-serif;
        }

        body{
            height: 100vh;
            width: 100%;
            background: #fff ;
        }

        .areaimage{
            position: absolute;
            top: 50%;
            left: 0;
        }

        .areaimage .btn {
            margin-left: 200PX;
            margin-top: -30px;
        }

        .information{
            position: absolute;
            top: 20%;
            left: 40%;
            padding: 30px 20px;
        }

        .information .data{
            position: absolute;
        }

        .information .data2{
            top: 0px;
            left: 450px;
            position: relative;
            margin-bottom: 100px;
        }

        .information p{
            margin-bottom: 40px;
        }

        .dcontainer .btnn{
            margin-left: 30px;
            left: 30px;
        }
    </style>
</head>

<body>
<div class="dcontainer">
    <div class="info">
        <p> Profile Details </p>
    </div>
    <div class="btnn">
        <button type="submit"> Edit </button>
        <button type="Download CV"> Edit </button>
    </div>
    <div class="areaimage">
        <div class="image">
            <img src="@#$@#$@#$" alt="Profile Image">
        </div>

        <div class="btn">
            <button type="submit"> Choose </button><br>
            <button type="submit"> Remove </button><br>
            <button type="submit"> Update </button><br>
        </div>
    </div>

    <div class="information">
        <div class="data">
            <div class="id">
                <h3> User Name: </h3>
                <p> Dimuth_99 </p>
            </div>
            <div class="fname">
                <h3> First Name: </h3>
                <p> Dimuth </p>
            </div>
            <div class="lname">
                <h3> Last Name: </h3>
                <p> Jayaweera </p>
            </div>
            <div class="pno">
                <h3> Phone Number: </h3>
                <p> 0779953576 </p>
            </div>
            <div class="mail">
                <h3> E-mail: </h3>
                <p> Dmuth@gmail.com </p>
            </div>
        </div>

        <div class="data2">
            <div class="address">
                <h3> Address: </h3>
                <p> NO 1/1, Horana rd, Agalawatta. </p>
            </div>
            <div class="dob">
                <h3> Date Of Birth: </h3>
                <p> 1999/06/18 </p>
            </div>
        </div>

    </div>

</div>
</body>
</html>