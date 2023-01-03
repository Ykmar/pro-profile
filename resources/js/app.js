import './bootstrap';

function scrollToHeading(id) {
    const div = document.getElementById(id);
    div.scrollIntoView({
        block: 'end',
        behavior: 'smooth',
        inline: 'start'
    });
}

// Burger menu
document.addEventListener('DOMContentLoaded', function() {
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');
    const logo = document.getElementById('logo-burger');

    if (burger.length && menu.length) {
        for (let i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (let j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');

                    if (menu[j].classList.contains('hidden')) {
                        logo.style = null;
                    } else {
                        logo.style.display = 'none';
                    }
                }
            });
        }
    }

    const navElements = document.querySelectorAll('.nav');

    navElements.forEach(function(navElement) {
        navElement.addEventListener('click', function() {
            if (document.location.pathname !== '/') {
                document.location.href = navElement.getAttribute('data-href');
            }

            scrollToHeading(navElement.getAttribute('data-target'));
        });
    });
});
