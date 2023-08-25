/* arreglo del botón del menú y del menú */
function myFunction(x) {
    var nav = document.getElementById("menu-wrapper");
    x.classList.toggle("change");
    
    if (nav.className === "menu-wrapper") {
        nav.className += " active";
    } else {
        nav.className = "menu-wrapper";
    }
}