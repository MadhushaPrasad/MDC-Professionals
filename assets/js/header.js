const btnSignUp = document.getElementById('btnSignUp');
const btnLogin = document.getElementById('btnLogin');

btnSignUp.addEventListener('click', function () {
    window.location = "/MDC-Professionals/pages/signup-welcome.php";
});

btnLogin.addEventListener('click', function () {
    window.location = "/MDC-Professionals/pages/login.php";
});

const select = document.querySelector(".mySelect");
const options = document.querySelectorAll(".mySelect option");

select.addEventListener("change", function () {
    const url = this.options[this.selectedIndex].dataset.url;
    if (url) {
        location.href = url;
    }
});