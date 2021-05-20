<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MDC | Job Seeker Service page</title>

    <!--    google font css-->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="../assets/css/job_seeker_servise.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/header-image.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>

<body>
<!--header start-->
<?php
include '../includes/common/header.php';
?>
<!--header end-->
<main>
    <!--    header images start-->
    <?php
    include '../includes/header-image.php';
    ?>
    <!--    header images end-->

    <!--    job seeker service content start-->
    <div class="SseriviceDivContainer">
        <div class="SseriviceContent">
            <h5>OUR SERVICES </h5>
            <h1>Job Seeker</h1>
            <p>Our assignment is the "Online Job Portal" which provides job opportunities through the Internet. Our
                website is called "MDC Professional".

                The primary objective of creating an online job portal is to give job seekers the opportunity to find a
                job that suits their qualifications as well as enable employers to find the people they want. That is,
                it gives job seekers the opportunity to look for a job in an easy way and employers to find suitable
                candidates.
                The job portal is designed to provide all types of jobs and different types of jobs. The main purpose of
                the job portal is to facilitate job seekers to get a job quickly. This is an attempt to minimize an
                applicant’s problems in finding the right job. So applicants can easily find jobs and employers can
                select suitable candidates.
            </p>
        </div>

        <div class="SseriviceImgDiv">
            <img src="../assets/images/jbSeekerService.png" alt="JobSeekerService Image" id="jpsImg">
        </div>

    </div>


    <div class="seeker">

        <p>
            The job seeker is the person who searches for jobs from our website.The job seeker needs to login to the
            website.
            Through our web site job sekkers can search any kind of a job and apply for the job, and also can upload CV.
            In addition we provide the job seekers a contact service that helps the seeker to contact with the provider.<br>
            This site allows job seekers to register on the site, search for different jobs according to their
            qualifications and apply for those jobs easily.
            After the job seeker registers himself, resumes and fills in the profile provided by the administrator, he
            will find the job under various conditions
            and he can change his profile and resume and apply for the job based on different conditions. Job seekers
            can update information entered during registration as well as their skills sets.
            When guest registered as a Job seeker, he/she can search job categories and view the details of jobs. And
            job seeker can apply for the job by uploading his/her CV and providing required information.
            Then job provider will go through the job seeker's application and will decide the approval. In the mean
            time job seeker should wait in a waiting list. If job seeker wants to find more details,
            they can contact the job provider. In addition to the job seeker can edit his own profile and the system
            will check the validity of the details he edited.
        </p>
    </div>

    <!--    job seeker service content end-->


    <!--    footer start-->
    <?php
    include '../includes/common/footer.php';
    ?>
    <!--    footer end-->
</main>
<script src="../assets/js/collapseButton.js"></script>
<script src="../assets/js/header.js"></script>
</body>

</html>