document.addEventListener("DOMContentLoaded", function () {
    // Show the loading icon immediately
    const loadingIcon = document.querySelector('.loader-container');
    loadingIcon.style.display = 'flex';

    // Flags to keep track of whether loading is complete and minimum time has passed
    let isPageLoaded = false;
    let minTimeElapsed = false;

    // After a minimum of 3 seconds, set the flag and hide the icon if the page is also loaded
    setTimeout(() => {
        minTimeElapsed = true;
        if (isPageLoaded) {
            loadingIcon.style.display = 'none';
        }
    }, 3000); // 3 seconds

    // When the page finishes loading, set the flag and hide the icon if the minimum time has passed
    window.addEventListener('load', () => {
        isPageLoaded = true;
        if (minTimeElapsed) {
            loadingIcon.style.display = 'none';
        }
    });
});