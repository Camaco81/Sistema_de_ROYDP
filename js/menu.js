
let activo=document.getElementById('activo');
let color=document.querySelectorAll('.bg-claro');


activo.addEventListener('click',()=>{
    for (var i = 0; i < color.length; i++) {
      color[i].classList.toggle("bg-oscuro");
      color[i].classList.toggle("bg-claro");
    }

});




