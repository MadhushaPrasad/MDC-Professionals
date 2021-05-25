const btnNewJobSeeker = document.getElementById('btnNewJobSeeker');
const btnNewjobProvider = document.getElementById('btnNewjobProvider');
const btnNewcompany = document.getElementById('btnNewcompany');
const btnNewjob = document.getElementById('btnNewjob');

const dashboardCon = document.getElementById('dashBoardContainerDiv');
const seekerCon = document.getElementById('seekerContainer');
const providerCon = document.getElementById('providerContainer');
const companyCon = document.getElementById('companyContainer');
const jobCon = document.getElementById('jobContainer');
const categoryCon = document.getElementById('categoryContainer');
const profileCon = document.getElementById('profileContainer');


//load job seeker content only
btnNewJobSeeker.addEventListener('click', function () {

    dashboardCon.style.display = "none";
    providerCon.style.display = "none";
    jobCon.style.display = "none";
    categoryCon.style.display = "none";
    companyCon.style.display = "none";
    seekerCon.style.display = "block";
    profileCon.style.display = "none";

    dashboardLink.classList.remove("active");
    jobProviderLink.classList.remove("active");
    companyLink.classList.remove("active");
    jobSeekerLink.classList.add("active");
    categoryLink.classList.remove("active");
    jobLink.classList.remove("active");
});

//load job provider content only
btnNewjobProvider.addEventListener('click', function () {
    dashboardCon.style.display = "none";
    seekerCon.style.display = "none";
    jobCon.style.display = "none";
    categoryCon.style.display = "none";
    companyCon.style.display = "none";
    providerCon.style.display = "block";
    profileCon.style.display = "none";

    dashboardLink.classList.remove("active");
    jobSeekerLink.classList.remove("active");
    companyLink.classList.remove("active");
    categoryLink.classList.remove("active");
    jobLink.classList.remove("active");
    jobProviderLink.classList.add("active");
});

//load company content only
btnNewcompany.addEventListener('click', function () {
    dashboardCon.style.display = "none";
    seekerCon.style.display = "none";
    providerCon.style.display = "none";
    jobCon.style.display = "none";
    categoryCon.style.display = "none";
    companyCon.style.display = "block";
    profileCon.style.display = "none";

    dashboardLink.classList.remove("active");
    jobSeekerLink.classList.remove("active");
    jobProviderLink.classList.remove("active");
    jobLink.classList.remove("active");
    categoryLink.classList.remove("active");
    companyLink.classList.add("active");
});

//load job content only
btnNewjob.addEventListener('click', function () {
    dashboardCon.style.display = "none";
    seekerCon.style.display = "none";
    providerCon.style.display = "none";
    companyCon.style.display = "none";
    categoryCon.style.display = "none";
    jobCon.style.display = "block";
    profileCon.style.display = "none";

    dashboardLink.classList.remove("active");
    jobSeekerLink.classList.remove("active");
    jobProviderLink.classList.remove("active");
    companyLink.classList.remove("active");
    categoryLink.classList.remove("active");
    jobLink.classList.add("active");
});
