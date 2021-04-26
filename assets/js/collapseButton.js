const btnCollapse = document.getElementById('toggle');
const navLinkDiv = document.getElementsByClassName('navLinkDiv');
const btnGroupDiv = document.getElementsByClassName('btnGroupDiv');

btnCollapse.addEventListener("click", function () {
    if (btnCollapse.value === 'on') {
        navLinkDiv[0].style.display = 'flex';
        btnGroupDiv[0].style.display = 'flex';
        btnCollapse.value = 'off'
    } else {
        navLinkDiv[0].style.display = 'none';
        btnGroupDiv[0].style.display = 'none';
        btnCollapse.value = 'on'
    }
});

