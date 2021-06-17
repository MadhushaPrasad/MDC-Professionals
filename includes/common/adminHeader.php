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
<div class="adminHeader">
    <div class="logoDiv">
        <img id="logSmall" src="../../assets/images/small-logo.png" alt="">
    </div>
    <h3>MDC Professionals</h3>
    <div class="btnGroupDiv">
        <a id="logOut" href="../../services/logoutService.php">Log Out</a>
        <a id="message" href="../../pages/admin/admin-message-page.php">
            <div id="messageSq">
                <img id="messageIc" src="../../assets/images/conversation.png" alt="message-icon">
            </div>
        </a>
        <a id="profile" href="../../pages/admin/admin-profile-page.php">
            <div id="profileCircle">

            </div>
        </a>
    </div>
</div>

<script>
    document.getElementById('profileCircle').style.backgroundImage = "url('../../assets/images/upload/<?php echo $userImagePath; ?>')";
</script>