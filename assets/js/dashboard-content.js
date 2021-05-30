const btnNewJobSeeker = document.getElementById('btnNewJobSeeker');
const btnNewjobProvider = document.getElementById('btnNewjobProvider');
const btnNewcompany = document.getElementById('btnNewcompany');
const btnNewjob = document.getElementById('btnNewjob');

//load job seeker content only
btnNewJobSeeker.addEventListener('click', function () {
    window.location = '../../pages/admin/admin-seeker-page.php';
});

//load job provider content only
btnNewjobProvider.addEventListener('click', function () {
    window.location = '../../pages/admin/admin-provider-page.php';
});

//load company content only
btnNewcompany.addEventListener('click', function () {
    window.location = '../../pages/admin/admin-company-page.php';
});

//load job content only
btnNewjob.addEventListener('click', function () {
    window.location = '../../pages/admin/admin-job-page.php';
});
