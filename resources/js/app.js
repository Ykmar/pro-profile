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

    if (burger.length && menu.length) {
        for (let i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (let j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    const anchorElements = document.querySelectorAll('.anchor');

    anchorElements.forEach(function(anchorElement) {
        anchorElement.addEventListener('click', function() {
            if (document.location.pathname !== '/') {
                document.location.href = anchorElement.getAttribute('data-href');
            }

            scrollToHeading(anchorElement.getAttribute('data-target'));
        });
    });
});
