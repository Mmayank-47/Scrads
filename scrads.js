document.addEventListener('DOMContentLoaded', function() {
    let btnAdvertiser = document.getElementById('btnAdvertiser');
    let btnDriver = document.getElementById('btnDriver');

    if (btnAdvertiser) {
        btnAdvertiser.addEventListener('click', function() {
            window.location.href = 'Ad_Registration.html';
        });
    }
    if (btnDriver) {
        btnDriver.addEventListener('click', function() {
            window.location.href = 'Driver_Registration.html';
        });
    } 
});
