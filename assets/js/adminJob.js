const jobProfilePicFeild = document.getElementById('jobProfilePic');
const jobBtnRemove = document.getElementById('jobBtnRemove');

jobProfilePicFeild.addEventListener('change', function () {
    const file = document.getElementById("jobProfilePic").files;
    try {
        if (!(file[0].name === 'undefine')) {
            if (file.length > 0) {
                const fileReader = new FileReader();

                fileReader.onload = function (event) {
                    document.getElementById("jobProfile").setAttribute("src", event.target.result);
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

jobBtnRemove.addEventListener('click', function () {
    document.getElementById("jobProfile").setAttribute("src", '/MDC-Professionals/' +
        'assets/images/portfolio.png');
});
