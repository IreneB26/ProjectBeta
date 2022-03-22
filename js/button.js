 const answer = document.querySelector(".answer");
 const question = document.querySelector(".question");
 const abrir = document.querySelectorAll(".open");


 abrir.forEach(function(button) {
     button.addEventListener('click', function(e) {
         answer.forEach(function(key) {
             answer[key].classList.toggle("visible");
             answer[key].classList.toggle("no_visible");
         });
     });
 });