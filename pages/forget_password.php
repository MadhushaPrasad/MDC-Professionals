<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
    <title>MDC | Reset Password </title>
    <link rel="stylesheet" href="../assets/css/forget_password.css">
</head>

<body>
    <div class="center">

    <div class="img"> 
    <img src="../assets/images/login-image.png" alt="image">
    </div>

        <div class="container">

            <img src="../assets/images/small-logo.png" alt="image">
    
            <div class="text" >Forget Password </div><br>

            <form action="../services/forget_password_service.php" method="post">

                <div class="data">
                    <input type="email" placeholder="Email" name="email" required>
                </div>

                <div class="btn">
                    <div class="inner"></div>
                    <button type="submit"> Send</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>