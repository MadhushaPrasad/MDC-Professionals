const dashboardLink = document.getElementById('dashboardLink');
const jobSeekerLink = document.getElementById('jobSeekerLink');
const jobProviderLink = document.getElementById('jobProviderLink');
const companyLink = document.getElementById('companyLink');
const jobLink = document.getElementById('jobLink');
const categoryLink = document.getElementById('categoryLink');

const dashboard = document.getElementById('dashBoardContainerDiv');
const seekerContainer = document.getElementById('seekerContainer');
const providerContainer = document.getElementById('providerContainer');

window.onload = function () {
    dashboardLink.classList.add("active");
    dashboard.style.display = "block";
    seekerContainer.style.display = "none";
    providerContainer.style.display = "none";
};


dashboardLink.addEventListener('click', function () {

    dashboard.style.display = "block";
    seekerContainer.style.display = "none";
    providerContainer.style.display = "none";
    // jobProviderLink.style.display = "none";
    // companyLink.style.display = "none";
    // jobLink.style.display = "none";
    // categoryLink.style.display = "none";
    dashboardLink.classList.add("active");
    jobSeekerLink.classList.remove("active");
    jobProviderLink.classList.remove("active");
});

jobSeekerLink.addEventListener('click', function () {

    dashboard.style.display = "none";
    providerContainer.style.display = "none";
    seekerContainer.style.display = "block";
    // companyLink.style.display = "none";
    // jobLink.style.display = "none";
    // categoryLink.style.display = "none";
    dashboardLink.classList.remove("active");
    jobProviderLink.classList.remove("active");
    jobSeekerLink.classList.add("active");
});


jobProviderLink.addEventListener('click', function () {
    dashboard.style.display = "none";
    seekerContainer.style.display = "none";
    providerContainer.style.display = "block";
    // jobProviderLink.style.display = "none";
    // companyLink.style.display = "none";
    // jobLink.style.display = "none";
    // categoryLink.style.display = "none";
    dashboardLink.classList.remove("active");
    jobSeekerLink.classList.remove("active");
    jobProviderLink.classList.add("active");
});


