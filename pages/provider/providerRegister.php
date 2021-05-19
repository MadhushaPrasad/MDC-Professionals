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
                <form action="" method="post">
                    <input type="file" name="image" id="profile-image" placeholder="Choose a Profile image" required=""
                           capture>
                    <input type="text" placeholder="User Name" required>
                    <input type="text" placeholder="First Name" required>
                    <input type="text" placeholder="Last Name" required>
                    <input type="text" placeholder="Address" required>
                    <input type="text" placeholder="Date Of Birth"
                           onfocus="(this.type='date')"
                           required>
                    <input type="text" placeholder="Phone Number" required>
                    <input type="email" placeholder="Email" required>
                    <input type="password" placeholder="Password" required>
                    <input type="password" placeholder="Confirm Password" required>
                    <button type="submit">Sign Up</button>
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