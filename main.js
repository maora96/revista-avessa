let hamburguer = document.getElementById('hamburguer');
let menu = document.getElementById('nav');
let bar = document.getElementById('bar');
let search = document.getElementById('search');

hamburguer.addEventListener('click', toggleMenu);
search.addEventListener('click', toggleSearch);


function toggleMenu() {
    menu.classList.toggle('none');
}

function toggleSearch() {
    bar.classList.toggle('none');
}