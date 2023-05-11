const password = document.querySelector('#password');
const icon = document.getElementById('icon');

const showButton = document.querySelector('.show');
const hideButton = document.querySelector('.hide');

const display = showButton.style.display


showButton.addEventListener('click', () => {
    showButton.style.display = 'none';
    hideButton.style.display = 'flex';
    password.setAttribute('type', 'text');
});
hideButton.addEventListener('click', () => {
    showButton.style.display = 'flex';
    hideButton.style.display = 'none';
    password.setAttribute('type', 'password');
})