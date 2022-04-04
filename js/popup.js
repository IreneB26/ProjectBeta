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
        $("body").addClass("scroll_hidden");



    })
    // .then(function () {

    //     $(".modal").addClass("modal_visible");

    // });

}














function volverIndex() {
    var ruta = 'index.php'
    $(".pop").html('');
    $("body").removeClass("scroll_hidden");
    $(".modal").removeClass("modal_visible");



}



function carritos(id) {
    let cantidad = document.getElementById("cantidad").value;

    var ruta = 'components-php/carrito.php?producto=' + id + '&cantidad=' + cantidad;


    $.get(ruta, function (data) {
        $(".carrito").html(data);
        $(".carrito").addClass("carrito_visible");

    })
}

function cerrarCarrito() {
    $(".carrito").removeClass("carrito_visible");

}



function pago(pago) {

    var ruta = 'pago.php?precio=' + pago;

    window.location.assign(ruta);

}

function pagoRealizado() {

    var ruta = 'index.php'

    Swal.fire({
        icon: 'success',
        title: 'Ha realizado el pago correctamente',
        text: 'Se le enviaran las entradas por correo',
        footer: '<a href="./index.php">si tiene algún problema contactenos</a>'
    }).then(function () {
        window.location = ruta;
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








