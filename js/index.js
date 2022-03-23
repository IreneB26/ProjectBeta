

 

// mobile menu

const navToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");
const icon = document.querySelector(".icon");
const linkActive = document.querySelector(".nav-menu-link");
const footer = document.querySelector(".footer");






// funcion abrir boton al click menu hamburguesa
navToggle.addEventListener("click", () =>{
    navMenu.classList.toggle("nav-menu_visible");

// icono cambiar al pulsar toogle 
    if(navMenu.classList.contains("nav-menu_visible")){
        icon.setAttribute("class", "fas fa-times icon");
    }else{
        icon.setAttribute("class", "fas fa-bars icon");
    }


// icono cambiar al pulsar seccion

 $(".nav-menu").find("a").click(function(){
  $(".icon").removeClass('fas fa-times')
  $(".icon").addClass('fas fa-bars')
})






// cambio de aria label menu 
    if(navMenu.classList.contains("nav-menu_visible")){
        navToggle.setAttribute("aria-label", "Cerrar menú");
    }else{
        navToggle.setAttribute("aria-label", "Abrir menú");
    }


});



// marcar pagina activa
$(".nav-menu").find("a").click(function(){
    $(".nav-menu a").removeClass('nav-menu-link-active')
    $(this).addClass('nav-menu-link-active')
  })



  // cerrar menu movil al ir a una seccion
  $(".nav-menu").find("a").click(function(){
    $(".nav-menu").removeClass('nav-menu_visible')
    $(this).addClass('nav-menu_visible')
  })


  

  const categoria = document.querySelectorAll(".footer_iz");

  categoria.forEach(function(button_cat) {
    button_cat.addEventListener('click', function(e) {
        button_cat.classList.toggle("active_button");
    });
});


  


 

// animación menu al bajar


$(document).scroll(function() {
  navbarScroll();
});

function navbarScroll() {
  var y = window.scrollY;
  if (y > 10) {
    $('.header').addClass('small');
  } else if (y < 10) {
    $('.header').removeClass('small');
  }
}


  
  
  




