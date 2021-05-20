//header sticky function

window.onscroll = function () {
    myFunction()
};

const header = document.getElementById("header");
const sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

//signup and login navigation buttons function
//
// const btnSignUp = document.getElementById('btnSignUp');
// const btnLogin = document.getElementById('btnLogin');
//
// btnSignUp.addEventListener('click', function () {
//     window.location = "/MDC-Professionals/pages/signup-welcome.php";
// });
//
// btnLogin.addEventListener('click', function () {
//     window.location = "/MDC-Professionals/pages/login.php";
// });
