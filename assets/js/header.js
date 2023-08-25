/* arreglo del botón del menú y del menú */
function myFunction(x) {
    var nav = document.getElementById("menu-wrapper");
    x.classList.toggle("change");
    
    if (nav.className === "menu-wrapper") {
        nav.className += " active";
    } else {
        nav.className = "menu-wrapper active inactive";
        setTimeout(function(){
          nav.className = "menu-wrapper";
        }, 3000);
    }
}

// detecta el scroll en el sitio
const body = document.body;
const header = document.querySelector(".main-header");
const menu = document.querySelector(".main-header .menu");
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove(scrollUp);
    return;
  }
  
  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
  } else if (currentScroll < lastScroll && body.classList.contains(scrollDown)) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
  }
  lastScroll = currentScroll;
});