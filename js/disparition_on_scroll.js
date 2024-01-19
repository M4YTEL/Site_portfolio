const banner = document.querySelector('.banner');
let banner_height = banner.clientHeight;
const scroll_to_top = document.querySelector('.scroll_to_top');


window.addEventListener(
    'scroll', () => {
        if (window.scrollY > banner_height) {
            scroll_to_top.classList.add('scroll');
        }
        else {
            scroll_to_top.classList.remove('scroll');
        }
    });