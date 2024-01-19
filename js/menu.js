function showResponsiveMenu() {
    var menu = document.getElementById("topnav_responsive_menu");
    var icon = document.getElementById("topnav_hamburger_icon");
    var root = document.getElementById("root");
    var body = document.querySelector("body");
    var links = document.querySelectorAll("#topnav_responsive_menu ul.navbar-links a");
    // var icones = document.querySelector("i")

    if (menu.className === "") {
        menu.className = "open";
        icon.className = "open";
        // root.style.overflowY = "hidden";
        body.classList.add("open");
        // icones.classList.add("open");
    } else {
        menu.className = "";
        icon.className = "";
        root.style.overflowY = "";
        body.classList.remove("open");
    }
    // Ajouter cet événement pour chaque lien
    links.forEach(function (link) {
        link.addEventListener('click', function () {
            menu.className = "";
            icon.className = "";
            // root.style.overflowY = "";
            body.classList.remove("open");
        });
    });
};

window.addEventListener('scroll', function () {
    var nav = document.querySelector(".topnav");
    var navHeight = nav.clientHeight;

    if (window.scrollY > navHeight) {
        nav.classList.add('scroll');
    } else {
        nav.classList.remove('scroll');
    }
});
