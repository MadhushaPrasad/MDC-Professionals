<?php

function getSeekerCount($connection)
{
    //get total count of providers
    $seekerCountQuery = "SELECT COUNT(s_ID) as seekerCount FROM seeker";
    $seekerCount = $connection->query($seekerCountQuery);
    $skCount = $seekerCount->fetch_assoc();
    echo $skCount['seekerCount'];
}

//get total count of providers
function getProviderCount($connection)
{
    $providerCountQuery = "SELECT COUNT(p_ID) as providerCount FROM provider";
    $providerCount = $connection->query($providerCountQuery);
    $pvCount = $providerCount->fetch_assoc();
    echo $pvCount['providerCount'];
}

//get total count of Companies
function getCompanyCount($connection)
{
    $companyCountQuery = "SELECT COUNT(company_ID) as companyCount FROM company";
    $companyCount = $connection->query($companyCountQuery);
    $comCount = $companyCount->fetch_assoc();
    echo $comCount['companyCount'];
}

//get total count of jobs
function getJobCount($connection)
{
    $jobCountQuery = "SELECT COUNT(job_ID) as jobCount FROM job";
    $jobCount = $connection->query($jobCountQuery);
    $jbCount = $jobCount->fetch_assoc();
    echo $jbCount['jobCount'];
}

//get latest job seekers
function getAllLatestJobSeekers($connection)
{
    $jobSeekerQuery = 'SELECT * FROM Seeker s,User_r u,seeker_Telephone sT 
                        WHERE s.u_id = u.u_id and s.s_ID = sT.s_ID ORDER BY s.s_ID DESC LIMIT 10';
    $jobSeekerList = $connection->query($jobSeekerQuery);
    while ($resultSet = $jobSeekerList->fetch_assoc()) {
        echo ' <tr>' .
            '<td>' . $resultSet['s_ID'] . '</td>' .
            '<td>' . $resultSet['u_id'] . '</td>' .
            '<td>' . ' <img src="../../assets/images/upload/' . $resultSet['image']
            . '" alt="seekerProfile" width="50px" height="50px"
                         style="background-position: 50% 50%;background-size: cover">' . '</td>' .
            '<td>' . $resultSet['user_name'] . '</td>' .
            '<td>' . $resultSet['address'] . '</td>' .
            '<td>' . $resultSet['dob'] . '</td>' .
            '<td>' . $resultSet['telephone'] . '</td>' .
            '<td>' . $resultSet['email'] . '</td>' .
            '<td>' .
            '&nbsp; &nbsp;<i class="fas fa-trash-alt" style="color: red; cursor: pointer;"></i>&nbsp; &nbsp;' .
            '<i class="fas fa-edit" style="color: #F0BB11;cursor: pointer;"></i> &nbsp; &nbsp;' .
            '</td>' .
            '</tr>';
    }

}

//get latest job providers
function getAllLatestJobProviders($connection)
{
    $jobProviderQuery = 'SELECT * FROM provider pv,User_r u,provider_Telephone pT 
                            WHERE pv.u_id = u.u_id and pv.p_ID = pT.p_ID ORDER BY pv.p_ID DESC LIMIT 10;';
    $jobProviderList = $connection->query($jobProviderQuery);
    while ($resultSet = $jobProviderList->fetch_assoc()) {
        echo ' <tr>' .
            '<td>' . $resultSet['p_ID'] . '</td>' .
            '<td>' . $resultSet['u_id'] . '</td>' .
            '<td>' . ' <img src="../../assets/images/upload/' . $resultSet['image']
            . '" alt="seekerProfile" width="50px" height="50px"
                         style="background-position: 50% 50%;background-size: cover">' . '</td>' .
            '<td>' . $resultSet['user_name'] . '</td>' .
            '<td>' . $resultSet['first_name'] . ' ' . $resultSet['last_name'] . '</td>' .
            '<td>' . $resultSet['email'] . '</td>' .
            '<td>' . $resultSet['telephone'] . '</td>' .
            '<td>' .
            '&nbsp; &nbsp;<i class="fas fa-trash-alt" style="color: red;cursor: pointer;"></i>&nbsp; &nbsp;' .
            '<i class="fas fa-edit" style="color: #F0BB11;cursor: pointer;"></i> &nbsp; &nbsp;' .
            '</td>' .
            '</tr>';
    }
}

//get latest job companies
function getAllLatestCompany($connection)
{
    $companyQuery = 'SELECT * FROM company ORDER BY company_ID desc LIMIT 10';
    $companyList = $connection->query($companyQuery);
    while ($resultSet = $companyList->fetch_assoc()) {
        echo ' <tr>' .
            '<td>' . $resultSet['company_ID'] . '</td>' .
            '<td>' . $resultSet['p_ID'] . '</td>' .
            '<td>' . ' <img src="../../assets/images/upload/' . $resultSet['image']
            . '" alt="seekerProfile" width="50px" height="50px"
                         style="background-position: 50% 50%;background-size: cover;">' . '</td>' .
            '<td>' . $resultSet['company_name'] . '</td>' .
            '<td>' . $resultSet['email'] . '</td>' .
            '<td>' . $resultSet['web_url'] . '</td>' .
            '<td>' . $resultSet['address'] . '</td>' .
            '<td>' . $resultSet['description'] . '</td>' .
            '<td>' . $resultSet['status'] . '</td>' .
            '<td>' .
            '&nbsp; &nbsp;<i class="fas fa-trash-alt" style="color: red;cursor: pointer;"></i>&nbsp; &nbsp;' .
            '<i class="fas fa-edit" style="color: #F0BB11;cursor: pointer;"></i> &nbsp; &nbsp;' .
            '</td>' .
            '</tr>';
    }
}

//get latest jobs
function getAllLatestJobs($connection)
{
    $jobQuery = 'SELECT * FROM job ORDER BY job_ID DESC LIMIT 10';
    $jobList = $connection->query($jobQuery);
    while ($resultSet = $jobList->fetch_assoc()) {
        echo ' <tr>' .
            '<td>' . $resultSet['job_ID'] . '</td>' .
            '<td>' . $resultSet['category_ID'] . '</td>' .
            '<td>' . $resultSet['sub_category_ID'] . '</td>' .
            '<td>' . $resultSet['j_name'] . '</td>' .
            '<td>' . ' <img src="../../assets/images/upload/' . $resultSet['img']
            . '" alt="seekerProfile" width="50px" height="50px"
                         style="background-position: 50% 50%;background-size: cover">' . '</td>' .
            '<td>' . $resultSet['description'] . '</td>' .
            '<td>' . $resultSet['price'] . '</td>' .
            '<td>' . $resultSet['status'] . '</td>' .
            '<td>' .
            '&nbsp; &nbsp;<i class="fas fa-trash-alt" style="color: red;cursor: pointer;"></i><br>' .
            '<i class="fas fa-edit" style="color: #F0BB11;cursor: pointer;"></i> &nbsp; &nbsp;' .
            '</td>' .
            '</tr>';
    }
}

//get popular companies
function getPopularCompany($connection)
{
    $companyQuery = 'SELECT * FROM company ORDER BY company_ID desc LIMIT 10';
    $companyList = $connection->query($companyQuery);
    while ($resultSet = $companyList->fetch_assoc()) {
        echo ' <div class="companyList">' .
            '<div class="comInfoDiv">' .
            '<img src="../../assets/images/upload/' . $resultSet['image'] . '"alt="company" width="60" height="60">' .
            '<div class="comNameInfo">' .
            '<p style="margin-top: 0;">' . $resultSet['company_name'] . '</p>' .
            '<p>' .
            '<small>' . date('Y-m-d H:i:s') . '</small>' .
            '</p>' .
            '</div>' .
            '</div>' .
            '</div>';
    }
}