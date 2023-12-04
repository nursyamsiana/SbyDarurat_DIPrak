document.addEventListener('DOMContentLoaded', function () {
    const dropdowns = document.querySelectorAll('.answer');

    dropdowns.forEach(dropdown => {
        const select = dropdown.querySelector('.select-answer');
        const caret = dropdown.querySelector('.caret');
        const menu = dropdown.querySelector('.menu');
        const options = dropdown.querySelectorAll('.menu li');

        select.addEventListener('click', () => {
            select.classList.toggle('select-clicked');
            caret.classList.toggle('caret-rotate');
            menu.classList.toggle('menu-open');
        });

        options.forEach(option => {
            option.addEventListener('click', () => {
                const selected = dropdown.querySelector('.dropdown');
                selected.innerText = option.innerText;
                select.classList.remove('select-clicked');
                caret.classList.remove('caret-rotate');
                menu.classList.remove('menu-open');
                options.forEach(opt => {
                    opt.classList.remove('active');
                });
                option.classList.add('active');
            });
        });
    });
});

document.getElementById("back").addEventListener("click", function() {
    window.location.href = "LayarPelaporan1\layarPelaporan1.html";
});
