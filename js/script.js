const hamburgerButton = document.querySelector('.hamburger');
const sidebar = document.querySelector('.sidebar');
const content = document.querySelector('.content');

hamburgerButton.addEventListener('click', () => {
    if (sidebar.style.left === '-205px') {
        sidebar.style.left = '0';
        content.style.marginLeft = '200px';
    } else {
        sidebar.style.left = '-200px';
        content.style.marginLeft = '0';
    }
});
