let family= document.getElementById('family');
let motrarFamilia= document.getElementById('mostrarFamilia');
mostrarFamilia.addEventListener('click',()=>{
     if (family.style.display === "none") {
      family.style.display = "block";
    } else {
      family.style.display = "none";
    }

});