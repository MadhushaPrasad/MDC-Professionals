const profile = document.getElementById('profile');
var view = false;
const profileDetails = document.getElementById('profileContainer');
profile.addEventListener('click', function () {
    if (!view) {
        profileDetails.style.display = "block";
        console.log(view);
        view = true;
        seekerContainer.style.display = "none";
        providerContainer.style.display = "none";
        companyContainer.style.display = "none";
        jobContainer.style.display = "none";
        categoryContainer.style.display = "none";
        dashboard.style.display = "none";
    } else {
        seekerContainer.style.display = "none";
        providerContainer.style.display = "none";
        companyContainer.style.display = "none";
        jobContainer.style.display = "none";
        categoryContainer.style.display = "none";
        dashboard.style.display = "block";
        view = false;
    }
    console.log(view);
});
console.log(view);