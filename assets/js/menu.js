const toggle = document.querySelector('.mobile');
const menu = document.querySelector('.menu');

toggle.addEventListener('click', () => {
    menu.classList.toggle('open');
})