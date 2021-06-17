const companyProfilePicFeild = document.getElementById('profile-image');
const companyBtnRemove = document.getElementById('companyBtnRemove');
const dashboardLink = document.getElementById('dashboardLink');
const jobSeekerLink = document.getElementById('jobSeekerLink');
const jobProviderLink = document.getElementById('jobProviderLink');
const companyLink = document.getElementById('companyLink');
const jobLink = document.getElementById('jobLink');
const categoryLink = document.getElementById('categoryLink');

companyProfilePicFeild.addEventListener('change', function () {
    const file = document.getElementById("profile-image").files;
    try {
        if (!(file[0].name === 'undefine')) {
            if (file.length > 0) {
                const fileReader = new FileReader();

                fileReader.onload = function (event) {
                    document.getElementById("companyProfile").setAttribute("src", event.target.result);
                };

                fileReader.readAsDataURL(file[0]);
            }
        } else {
            console.log("Error", "You cant upload a image \n without select", "error");
        }
    } catch (err) {
        console.log("Error", "You cant upload a image \n without select", "error");
    }
});

companyBtnRemove.addEventListener('click', function () {
    document.getElementById("companyProfile").setAttribute("src", '/MDC-Professionals/' +
        'assets/images/building.png');
});

window.onload = function () {
    dashboardLink.classList.remove("active");
    jobSeekerLink.classList.remove("active");
    jobProviderLink.classList.remove("active");
    jobLink.classList.remove("active");
    categoryLink.classList.remove("active");
    companyLink.classList.add("active");
};
