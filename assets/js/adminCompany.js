const companyProfilePicFeild = document.getElementById('companyProfilePic');
const companyBtnRemove = document.getElementById('companyBtnRemove');

companyProfilePicFeild.addEventListener('change', function () {
    const file = document.getElementById("companyProfilePic").files;
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
