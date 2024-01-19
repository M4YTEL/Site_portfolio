function ListeDepliante(element) {
    const item = element.closest('.item');
    const texte = item.querySelector('.texte');
    const img = item.querySelector('.competence_illustration');
    const btn = item.querySelector('.btn-list');
    const title = item.querySelector('.item h4');

    if (texte.style.display === "none") {
        texte.style.display = "block";
        img.style.display = "block";
        title.classList.add('open');
        item.classList.add('open');
        texte.classList.add('open');
        btn.classList.add('open');
    } else {
        btn.classList.remove('open');
        item.classList.remove('open');
        texte.classList.remove('open');
        title.classList.remove('open')
        texte.style.display = "none";
        img.style.display = "none";
    }
}