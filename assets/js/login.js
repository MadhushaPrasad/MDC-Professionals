function navigate() {
    const seeker = document.getElementById('seeker').checked;
    const provider = document.getElementById('provider').checked;
    const admin = document.getElementById('admin').checked;
    console.log(seeker);
    console.log(provider);
    console.log(admin);

    if (seeker) {
        window.location = '../../../MDC-Professionals/pages/seeker/seekerHomepage.php';
    } else if (provider) {
        window.location = '../../../MDC-Professionals/pages/provider/providerHomepage.php'
    } else if (admin) {
        window.location = '../../../MDC-Professionals/pages/admin/dashboard.php'
    } else {
        alert("Please select the user type to navigate");
    }


}