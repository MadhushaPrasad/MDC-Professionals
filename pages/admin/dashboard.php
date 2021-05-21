<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDC | Admin Dashboard</title>
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link rel="stylesheet" href="../../assets/css/adminHeader.css">
    <link rel="stylesheet" href="../../assets/css/adminSlideMenu.css">
    <link rel="stylesheet" href="../../assets/css/dashboard-content.css">
    <link rel="stylesheet" href="../../assets/css/adminFooter.css">
</head>
<body>
<!--header start-->
<?php
include '../../includes/common/adminHeader.php';
?>
<!--header end-->
<!--slide menu start-->
<?php
include '../../includes/common/adminSlideMenu.php';
?>
<!--slide menu end-->
<main>
    <!--slide menu start-->
    <?php
    include '../../includes/admin/dashboard-content.php';
    ?>
    <!--slide menu end-->

    <!--slide menu start-->
    <div style="display: flex;flex-direction: row;width: 100%">
        <!--    finding job rate start-->
        <div class="companyDiv">
            <h1>POPULAR COMPANY LIST</h1>
            <span></span>
            <div class="companyList">
                <div class="comInfoDiv">
                    <img src="/MDC-Professionals/assets/images/company-icon.png" alt="company" width="60" height="60">
                    <div class="comNameInfo">
                        <p style="margin-top: 0;">Lorem Ipsum</p>
                        <p>
                            <small>1.2.P.M</small>
                        </p>
                    </div>
                </div>

                <div class="comInfoDiv">
                    <img src="/MDC-Professionals/assets/images/company-icon.png" alt="company" width="60" height="60">
                    <div class="comNameInfo">
                        <p style="margin-top: 0;">Lorem Ipsum</p>
                        <p>
                            <small>1.2.P.M</small>
                        </p>
                    </div>
                </div>

                <div class="comInfoDiv">
                    <img src="/MDC-Professionals/assets/images/company-icon.png" alt="company" width="60" height="60">
                    <div class="comNameInfo">
                        <p style="margin-top: 0;">Lorem Ipsum</p>
                        <p>
                            <small>1.2.P.M</small>
                        </p>
                    </div>
                </div>

                <div class="comInfoDiv">
                    <img src="/MDC-Professionals/assets/images/company-icon.png" alt="company" width="60" height="60">
                    <div class="comNameInfo">
                        <p style="margin-top: 0;">Lorem Ipsum</p>
                        <p>
                            <small>1.2.P.M</small>
                        </p>
                    </div>
                </div>
            </div>

            <div class="companyList">
                <div class="comInfoDiv">
                    <img src="/MDC-Professionals/assets/images/company-icon.png" alt="company" width="60" height="60">
                    <div class="comNameInfo">
                        <p style="margin-top: 0;">Lorem Ipsum</p>
                        <p>
                            <small>1.2.P.M</small>
                        </p>
                    </div>
                </div>

                <div class="comInfoDiv">
                    <img src="/MDC-Professionals/assets/images/company-icon.png" alt="company" width="60" height="60">
                    <div class="comNameInfo">
                        <p style="margin-top: 0;">Lorem Ipsum.</p>
                        <p>
                            <small>1.2.P.M</small>
                        </p>
                    </div>
                </div>

                <div class="comInfoDiv">
                    <img src="/MDC-Professionals/assets/images/company-icon.png" alt="company" width="60" height="60">
                    <div class="comNameInfo">
                        <p style="margin-top: 0;">Lorem Ipsum</p>
                        <p>
                            <small>1.2.P.M</small>
                        </p>
                    </div>
                </div>

                <div class="comInfoDiv">
                    <img src="/MDC-Professionals/assets/images/company-icon.png" alt="company" width="60" height="60">
                    <div class="comNameInfo">
                        <p style="margin-top: 0;">Lorem Ipsum</p>
                        <p>
                            <small>1.2.P.M</small>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!--    finding job rate end-->
    </div>
    <!--slide menu end-->
</main>
<!--slide menu start-->
<?php
include '../../includes/common/adminFooter.php';
?>
<!--slide menu end-->

</body>
</html>