const popup = document.querySelector(".pop");
const card = document.querySelector(".bg_card");
const body = document.querySelector("body");
const blur = document.querySelector(".popup_after");

const ver_mas = document.querySelectorAll(".ver_mas");



// ver_mas.forEach(function (card_click) {
//     card_click.addEventListener('click', function (index) {
//         alert(index);
//     });
// });

function mostrarDetalles(id) {
    var ruta = 'components-php/modal.php?info=' + id;

    $.get(ruta, function (data) {
        $(".pop").html(data);
    });
}


function volverIndex() {
    var ruta = 'index.php'
    $.get(ruta, function (data) {
        $("body").html(data);
    });

}

// card.addEventListener("click", () => {
//     body.style.overflow = 'hidden';

//     popup.classList.toggle("pop_up");
//     blur.classList.toggle("blur");



//     popup.innerHTML = popup.innerHTML + `
//     <button class="close"> <i class="fas fa-times fa-lg icon"></i> </button>
//         <figure class="img_popup">

//         </figure>

//         <article class="desc_event">
//         una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
//         </article>




//     `;

//     const close = document.querySelector(".close");

//     close.addEventListener("click", () => {

//         blur.classList.remove("blur");

//         popup.classList.remove('pop_up');

//         body.style.overflow = 'visible';

//         popup.innerHTML = ``;


//     });

// });








