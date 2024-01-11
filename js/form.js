let family= document.getElementById('family');
let datos=document.getElementById('dato_g');
let mostradatos=document.getElementById('mostrardatos');
let motrarFamilia= document.getElementById('mostrarFamilia');

mostrarFamilia.addEventListener('click',()=>{
     if (family.style.display === "none") {
      family.style.display = "block";
    } else {
      family.style.display = "none";
    }

});

mostradatos.addEventListener('click',()=>{
     if (datos.style.display === "none") {
      datos.style.display = "block";
    } else {
      datos.style.display = "none";
    }

});