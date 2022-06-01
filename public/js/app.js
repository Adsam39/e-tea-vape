/*const items = document.querySelectorAll('img');
const nbSlide = items.length;
const suivant = document.querySelector('right');
const precedent = document.querySelector('left');
let count = 0;

function slideSuivante() {
    items[count].classList.remove('active');

    if (count < nbSlide - 1) {
        count++;
    } else {
        count = 0;
    }

    items[count].classList.add('active')
    console.log(count);

}
suivant.addEventListener('click', slideSuivante)


function slidePrecedente() {
    items[count].classList.remove('active');

    if (count > 0) {
        count--;
    } else {
        count = nbSlide - 1;
    }

    items[count].classList.add('active')
    // console.log(count);

}
precedent.addEventListener('click', slidePrecedente)

function keyPress(e) {
    console.log(e);

    if (e.keyCode === 37) {
        slidePrecedente();
    } else if (e.keyCode === 39) {
        slideSuivante();
    }
}
document.addEventListener('keydown', keyPress)*/

function fermerMenu() {
    history.go(-1);
}

var slide = new Array("foret-peuplier.jpg", "paysage-montagne.jpg", "chemin-automne.jpg", "prairie-alpes.jpg");
var numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}