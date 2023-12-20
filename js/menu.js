let menu= document.getElementById('menu');
let activarMenu= document.getElementById('activar-menu');

activarMenu.addEventListener('click',()=>{
	   if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }

});

