<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
    <title>MDC | log in</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <div class="center">

    <div class="img"> 
    <img src="../assets/images/login-image.png" alt="image">
    </div>

        <div class="container">

            <img src="../assets/images/small-logo.png" alt="image">
    
            <div class="text" >Login Form </div><br>

                <div class="tik">
                    <input type="radio" name="choose" id="seaker"><label for="seaker">Seaker</label>
                    <input type="radio" name="choose" id="provider"><label for="provider">Provider</label>
                    <input type="radio" name="choose" id="admin"><label for="admin">Admin</label>
                </div>

            <form action="#">

                <div class="data">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="data">
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="forgot-pass"><a href="forget_password.php">Forgot Password</a></div>

                <div class="btn">
                    <div class="inner"></div>
                    <button type="submit"> Login</button>
                </div>
                <div class="create_acc">Don't You Have An Acoount ?<br><br><a href="signup-welcome.php">Create
                        Account</a></div>

            </form>
        </div>
    </div>

</body>

</html>