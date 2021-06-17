<?php
require '../../config/DBConnection.php';
require_once '../../services/dashboardService.php';
$newConnection = $connection;
?>
<div id="dashBoardContainerDiv">
    <div class="adminDashboardContent">
        <div class="countRow">
            <div class="countCard">
                <h4>Job Seekers</h4>
                <h4>
                    <?php
                    getSeekerCount($newConnection);
                    ?>
                </h4>
            </div>
            <div class="countCard">
                <h4>Job Providers</h4>
                <h4>
                    <?php
                    getProviderCount($newConnection);
                    ?>
                </h4>
            </div>
            <div class="countCard">
                <h4>Companies</h4>
                <h4>
                    <?php
                    getCompanyCount($newConnection);
                    ?>
                </h4>
            </div>
            <div class="countCard">
                <h4>Total Jobs</h4>
                <h4>
                    <?php
                    getJobCount($newConnection);
                    ?>
                </h4>
            </div>
        </div>
    </div>
    <div style="display: flex;flex-direction: row;width: 100%;">
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
    <div class="tableDiv">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Latest Job Seeker</h1>
                <span style="width: 280px;position: absolute;top: 66px;left: 35px;"></span>
                <button title="new Job Seeker" id="btnNewJobSeeker"><i class="fa fa-plus"></i></button>
            </div>
            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>User ID</th>
                    <th>Seeker ID</th>
                    <th>Image</th>
                    <th>User Name</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>DOB</th>
                    <th>Telephone</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <?php
                getAllLatestJobSeekers($newConnection);
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="tableDiv01">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Latest Job Providers</h1>
                <span style="width: 280px;position: absolute;top: 66px;left: 35px;"></span>
                <button title="New Job Provider" id="btnNewjobProvider"><i class="fa fa-plus"></i></button>
            </div>

            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>User ID</th>
                    <th>Provider ID</th>
                    <th>Image</th>
                    <th>User Name</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                getAllLatestJobProviders($newConnection);
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="tableDiv02">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Latest Company</h1>
                <span style="width: 280px;position: absolute;top: 66px;left: 35px;"></span>
                <button title="New Job Company" id="btnNewcompany"><i class="fa fa-plus"></i></button>
            </div>

            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>Company ID</th>
                    <th>P_ID ID</th>
                    <th>Image</th>
                    <th>Company Name</th>
                    <th>email</th>
                    <th>web url</th>
                    <th>address</th>
                    <th>description</th>
                    <th>status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                getAllLatestCompany($newConnection);
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div id="tableDiv03">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Latest Jobs</h1>
                <span style="width: 180px;position: absolute;top: 66px;left: 35px;"></span>
                <button title="New Job" id="btnNewjob"><i class="fa fa-plus"></i></button>
            </div>

            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>Job ID</th>
                    <th>Main Category</th>
                    <th>Sub Category</th>
                    <th>Job Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                getAllLatestJobs($newConnection);
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>