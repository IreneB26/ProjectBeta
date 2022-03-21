const popup = document.querySelector(".pop");
const card = document.querySelector(".bg_card");
const body = document.querySelector("body");



card.addEventListener("click", () =>{
    body.style.overflow = 'hidden';
    
    popup.classList.toggle("pop_up");


    popup.innerHTML = popup.innerHTML + `
    <button class="close"> close </button>
    `;

    const close = document.querySelector(".close");

close.addEventListener("click", () =>{
    
    popup.classList.remove('pop_up');
    body.style.overflow = 'visible';

    popup.innerHTML = ``;

    
});
    
});

