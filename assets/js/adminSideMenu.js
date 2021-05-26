const dashboardLink = document.getElementById('dashboardLink');
const jobSeekerLink = document.getElementById('jobSeekerLink');
const jobProviderLink = document.getElementById('jobProviderLink');
const companyLink = document.getElementById('companyLink');
const jobLink = document.getElementById('jobLink');
const categoryLink = document.getElementById('categoryLink');

const dashboard = document.getElementById('dashBoardContainerDiv');
const seekerContainer = document.getElementById('seekerContainer');
const providerContainer = document.getElementById('providerContainer');
const companyContainer = document.getElementById('companyContainer');
const jobContainer = document.getElementById('jobContainer');
const categoryContainer = document.getElementById('categoryContainer');
const profileContainer = document.getElementById('profileContainer');
const messageContainer = document.getElementById('messageContainer');
const chatBoxContainer = document.getElementById('chatBoxContainer');


//load window onload content only
window.onload = function () {
    dashboardLink.classList.add("active");
    dashboard.style.display = "block";
    seekerContainer.style.display = "none";
    providerContainer.style.display = "none";
    companyContainer.style.display = "none";
    jobContainer.style.display = "none";
    categoryContainer.style.display = "none";
    profileContainer.style.display = "none";
    messageContainer.style.display = "none";
    chatBoxContainer.style.display = "none";
};

//load dashboard content only
dashboardLink.addEventListener('click', function () {

    dashboard.style.display = "block";
    seekerContainer.style.display = "none";
    providerContainer.style.display = "none";
    jobContainer.style.display = "none";
    categoryContainer.style.display = "none";
    companyContainer.style.display = "none";
    profileContainer.style.display = "none";
    messageContainer.style.display = "none";
    chatBoxContainer.style.display = "none";

    dashboardLink.classList.add("active");
    jobSeekerLink.classList.remove("active");
    jobProviderLink.classList.remove("active");
    companyLink.classList.remove("active");
    jobLink.classList.remove("active");
    categoryLink.classList.remove("active");
});


//load job seeker content only
jobSeekerLink.addEventListener('click', function () {

    dashboard.style.display = "none";
    providerContainer.style.display = "none";
    jobContainer.style.display = "none";
    categoryContainer.style.display = "none";
    companyContainer.style.display = "none";
    seekerContainer.style.display = "block";
    profileContainer.style.display = "none";
    messageContainer.style.display = "none";
    chatBoxContainer.style.display = "none";

    dashboardLink.classList.remove("active");
    jobProviderLink.classList.remove("active");
    companyLink.classList.remove("active");
    jobSeekerLink.classList.add("active");
    categoryLink.classList.remove("active");
    jobLink.classList.remove("active");
});

//load job provider content only
jobProviderLink.addEventListener('click', function () {
    dashboard.style.display = "none";
    seekerContainer.style.display = "none";
    jobContainer.style.display = "none";
    categoryContainer.style.display = "none";
    companyContainer.style.display = "none";
    providerContainer.style.display = "block";
    profileContainer.style.display = "none";
    messageContainer.style.display = "none";
    chatBoxContainer.style.display = "none";

    dashboardLink.classList.remove("active");
    jobSeekerLink.classList.remove("active");
    companyLink.classList.remove("active");
    categoryLink.classList.remove("active");
    jobLink.classList.remove("active");
    jobProviderLink.classList.add("active");
});

//load company content only
companyLink.addEventListener('click', function () {
    dashboard.style.display = "none";
    seekerContainer.style.display = "none";
    providerContainer.style.display = "none";
    jobContainer.style.display = "none";
    categoryContainer.style.display = "none";
    companyContainer.style.display = "block";
    profileContainer.style.display = "none";
    messageContainer.style.display = "none";
    chatBoxContainer.style.display = "none";

    dashboardLink.classList.remove("active");
    jobSeekerLink.classList.remove("active");
    jobProviderLink.classList.remove("active");
    jobLink.classList.remove("active");
    categoryLink.classList.remove("active");
    companyLink.classList.add("active");
});

//load job content only
jobLink.addEventListener('click', function () {
    dashboard.style.display = "none";
    seekerContainer.style.display = "none";
    providerContainer.style.display = "none";
    companyContainer.style.display = "none";
    categoryContainer.style.display = "none";
    jobContainer.style.display = "block";
    profileContainer.style.display = "none";
    messageContainer.style.display = "none";
    chatBoxContainer.style.display = "none";

    dashboardLink.classList.remove("active");
    jobSeekerLink.classList.remove("active");
    jobProviderLink.classList.remove("active");
    companyLink.classList.remove("active");
    categoryLink.classList.remove("active");
    jobLink.classList.add("active");
});


//load Category content only
categoryLink.addEventListener('click', function () {
    dashboard.style.display = "none";
    seekerContainer.style.display = "none";
    providerContainer.style.display = "none";
    companyContainer.style.display = "none";
    jobContainer.style.display = "none";
    categoryContainer.style.display = "block";
    profileContainer.style.display = "none";
    messageContainer.style.display = "none";
    chatBoxContainer.style.display = "none";

    dashboardLink.classList.remove("active");
    jobSeekerLink.classList.remove("active");
    jobProviderLink.classList.remove("active");
    companyLink.classList.remove("active");
    jobLink.classList.remove("active");
    categoryLink.classList.add("active");
});

