const providerProfilePicFeild = document.getElementById('providerProfilePic');
const providerBtnRemove = document.getElementById('providerBtnRemove');

providerProfilePicFeild.addEventListener('change', function () {
    const file = document.getElementById("providerProfilePic").files;
    try {
        if (!(file[0].name === 'undefine')) {
            if (file.length > 0) {
                const fileReader = new FileReader();

                fileReader.onload = function (event) {
                    document.getElementById("providerProfile").setAttribute("src", event.target.result);
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

providerBtnRemove.addEventListener('click', function () {
    document.getElementById("providerProfile").setAttribute("src", '/MDC-Professionals/' +
        'assets/images/avatar-profile-picture.jpg');
});
