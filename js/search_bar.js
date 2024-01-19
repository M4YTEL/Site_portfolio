// JavaScript code
function search_projet() {
    let input = document.getElementById('search_bar').value
    input = input.toLowerCase();
    let x = document.getElementsByClassName('cards_item');

    for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display = "none";
        }
        else {
            x[i].style.display = "block";
        }
    }
}