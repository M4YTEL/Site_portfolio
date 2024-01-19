function Deplier() {
    var rsdots = document.getElementById("rs-dots");
    var rsmoreText = document.getElementById("rs-more");
    var rsbtnText = document.querySelector(".btn-close");
    const rsbtnText2 = document.querySelector(".rs-btn-more");
    // const social = document.querySelector(".social")

    if (rsdots.style.display === "none") {
        rsdots.style.display = "block";
        rsbtnText.innerHTML = "réseaux sociaux";
        rsmoreText.style.display = "none";
        //Pour décaler le bouton vers la gauche
        rsbtnText.classList.add('close');
        rsbtnText2.classList.add('close');

    } else {
        rsdots.style.display = "none";
        rsbtnText.innerHTML = '<img src="../icons/Close.svg">';
        rsmoreText.style.display = "block";
        //Pour effacer le décalage du bouton vers la gauche
        rsbtnText.classList.remove('close');
        rsbtnText2.classList.remove('close');
    }
} 