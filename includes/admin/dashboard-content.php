<?php
require '../../config/DBConnection.php';

//get total count of providers
$seekerCountQuery = "SELECT COUNT(s_ID) as seekerCount FROM seeker";
$seekerCount = $connection->query($seekerCountQuery);
$skCount = $seekerCount->fetch_assoc();

//get total count of providers
$providerCountQuery = "SELECT COUNT(p_ID) as providerCount FROM provider";
$providerCount = $connection->query($providerCountQuery);
$pvCount = $providerCount->fetch_assoc();

//get total count of Companies
$companyCountQuery = "SELECT COUNT(company_ID) as companyCount FROM company";
$companyCount = $connection->query($companyCountQuery);
$comCount = $companyCount->fetch_assoc();

//get total count of jobs
$jobCountQuery = "SELECT COUNT(job_ID) as jobCount FROM job";
$jobCount = $connection->query($jobCountQuery);
$jbCount = $jobCount->fetch_assoc();

//$providerCountQuery = "SELECT COUNT(p_ID) FROM provider";
//$providerCount = $connection->query($jobCountQuery);
//$providerCount = $providerCount->fetch_assoc();
?>
<div id="dashBoardContainerDiv">
    <div class="adminDashboardContent">
        <div class="countRow">
            <div class="countCard">
                <h4>Job Seekers</h4>
                <h4>
                    <?php
                    echo $skCount['seekerCount'];
                    ?>
                </h4>
            </div>
            <div class="countCard">
                <h4>Job Providers</h4>
                <h4>
                    <?php
                    echo $pvCount['providerCount'];
                    ?>
                </h4>
            </div>
            <div class="countCard">
                <h4>Companies</h4>
                <h4>
                    <?php
                    echo $comCount['companyCount'];
                    ?>
                </h4>
            </div>
            <div class="countCard">
                <h4>Total Jobs</h4>
                <h4>
                    <?php
                    echo $jbCount['jobCount'];
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
                <span style="width: 280px"></span>
                <button title="new Job Seeker" id="btnNewJobSeeker"><i class="fa fa-plus"></i></button>
            </div>
            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
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
                <tr>
                    <td>s001</td>
                    <td>iamge</td>
                    <td>Madhhush_99</td>
                    <td>Madhusha Prasad</td>
                    <td>Kalutara</td>
                    <td>199-04-13</td>
                    <td>0764727839</td>
                    <td>madushaprasad21@gmail.com</td>
                    <td>
                        <i class="fas fa-trash-alt" style="color: red"></i>
                        <i class="fas fa-edit" style="color: #F0BB11"></i>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div id="tableDiv01">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Latest Job Providers</h1>
                <span></span>
                <button title="New Job Provider" id="btnNewjobProvider"><i class="fa fa-plus"></i></button>
            </div>

            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>User Name</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>DOB</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>s001</td>
                    <td>iamge</td>
                    <td>Madhhush_99</td>
                    <td>Madhusha Prasad</td>
                    <td>Kalutara</td>
                    <td>199-04-13</td>
                    <td>0764727839</td>
                    <td>madushaprasad21@gmail.com</td>
                    <td>
                        <i class="fas fa-trash-alt" style="color: red;cursor: pointer;"></i>
                        <i class="fas fa-edit" style="color: #F0BB11;cursor: pointer;"></i>
                    </td>
                <tr>

                </tbody>
            </table>
        </div>
    </div>
    <div id="tableDiv02">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Latest Company</h1>
                <span style="width: 270px"></span>
                <button title="New Job Company" id="btnNewcompany"><i class="fa fa-plus"></i></button>
            </div>

            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>User Name</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>DOB</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>s001</td>
                    <td>iamge</td>
                    <td>Madhhush_99</td>
                    <td>Madhusha Prasad</td>
                    <td>Kalutara</td>
                    <td>199-04-13</td>
                    <td>0764727839</td>
                    <td>madushaprasad21@gmail.com</td>
                    <td>
                        <i class="fas fa-trash-alt" style="color: red;cursor: pointer;"></i>
                        <i class="fas fa-edit" style="color: #F0BB11;cursor: pointer;"></i>
                    </td>
                <tr>

                </tbody>
            </table>
        </div>
    </div>
    <div id="tableDiv03">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Latest Jobs</h1>
                <span style="width: 180px"></span>
                <button title="New Job" id="btnNewjob"><i class="fa fa-plus"></i></button>
            </div>

            <table border="1" class="table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
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
                <tr>
                    <td>s001</td>
                    <td>iamge</td>
                    <td>Madhhush_99</td>
                    <td>Madhusha Prasad</td>
                    <td>Kalutara</td>
                    <td>199-04-13</td>
                    <td>0764727839</td>
                    <td>madushaprasad21@gmail.com</td>
                    <td>
                        <i class="fas fa-trash-alt" style="color: red;cursor: pointer;"></i>
                        <i class="fas fa-edit" style="color: #F0BB11;cursor: pointer;"></i>
                    </td>
                <tr>
                </tbody>
            </table>
        </div>
    </div>
</div>