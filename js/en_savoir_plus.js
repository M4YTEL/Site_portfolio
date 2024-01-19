function EnSavoirPlus() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("btn-more");

    if (dots.style.display === "none") {
        dots.style.display = "grid";
        btnText.innerHTML = "Voir plus de projets";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Voir moins de projets";
        moreText.style.display = "grid";
    }
}
