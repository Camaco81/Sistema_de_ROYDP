let menu= document.getElementById('menu');
let activarMenu= document.getElementById('activar-menu');
let activo=document.getElementById('activo');
let color=document.querySelectorAll('.bg-claro');


activarMenu.addEventListener('click',()=>{
	   if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }

});

activo.addEventListener('click',()=>{
    for (var i = 0; i < color.length; i++) {
      color[i].classList.toggle("bg-oscuro");
      color[i].classList.toggle("bg-claro");
    }

});




