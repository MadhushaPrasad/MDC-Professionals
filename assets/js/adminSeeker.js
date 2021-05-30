const profilePicFeild = document.getElementById('seekerProfilePic');
const seekerBtnRemove = document.getElementById('seekerBtnRemove');

profilePicFeild.addEventListener('change', function () {
    const file = document.getElementById("seekerProfilePic").files;
    try {
        if (!(file[0].name === 'undefine')) {
            if (file.length > 0) {
                const fileReader = new FileReader();

                fileReader.onload = function (event) {
                    document.getElementById("seekerProfileSeeker").setAttribute("src", event.target.result);
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

seekerBtnRemove.addEventListener('click', function () {
    document.getElementById("seekerProfileSeeker").setAttribute("src", '/MDC-Professionals/' +
        'assets/images/avatar-profile-picture.jpg');
});

// const dashboardLink = document.getElementById('dashboardLink');
// const jobSeekerLink = document.getElementById('jobSeekerLink');
// const jobProviderLink = document.getElementById('jobProviderLink');
// const companyLink = document.getElementById('companyLink');
// const jobLink = document.getElementById('jobLink');
// const categoryLink = document.getElementById('categoryLink');