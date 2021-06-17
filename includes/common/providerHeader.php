<?php
$connection = mysqli_connect("localhost", "root", "", "mdc");
$userID = $_SESSION['userID'];
$userImage = $connection->query("SELECT image FROM user_r WHERE u_id = $userID");
$userImagePath = '';
while ($image = $userImage->fetch_assoc()) {
    $userImagePath = $image['image'];
}
$connection->close();
?>
<header id="header">
    <div class="logoDiv">
        <img alt="logo" src="/MDC-Professionals/assets/images/small-logo.png">
    </div>
    <div class="navLinkDiv">
        <a href="/MDC-Professionals/index.php">Home <br><span></span></a>
        <a href="/MDC-Professionals/index.php">Create A Job<br><span></span></a>
        <a href="/MDC-Professionals/index.php">My Company<br><span></span></a>
        <a href="/MDC-Professionals/pages/finding_job.php">Message</a>
        <a href="/MDC-Professionals/pages/about-us.php">About Us</a>
        <a href="/MDC-Professionals/pages/conatct-us.php">Contact Us</a>
    </div>
    <div class="btnGroupDiv">
        <a id="logOut" href="../../services/logoutService.php">Log Out</a>
        <a id="profile" href="">
            <div id="profileCircle">

            </div>
        </a>
    </div>
    <div class="collapeBtnDiv">
        <label for="toggle">&#9776;</label>
        <input id="toggle" type="checkbox"/>
    </div>
</header>
<script>
    document.getElementById('profileCircle').style.backgroundImage = "url('../../assets/images/upload/<?php echo $userImagePath; ?>')";
</script>