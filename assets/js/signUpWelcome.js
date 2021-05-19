const jobSeeker = document.getElementById('jobSeeker');
const jobProvider = document.getElementById('jobProvider');

jobProvider.addEventListener('click', function () {
    window.location = "/MDC-Professionals/pages/provider/providerRegister.php";
});

jobSeeker.addEventListener('click', function () {
    window.location = "/MDC-Professionals/pages/seeker/seekerRegister.php";
});