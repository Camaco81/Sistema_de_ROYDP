//funcion para generar pdf que funciona escaneando toda lapgina html y la comvierte a pdf
document.addEventListener("DOMContentLoaded",()=>{
const $boton = document.querySelector("#btnCrearPdf");
$boton.addEventListener("click",()=>{
	

	$boton.style.display="none"

	const $elementoParaConvertir= document.body;
	html2pdf()
	.set({
		margin:1,
		filename:'documento.pdf',
		image:{
			type:'png',
			quality:0.98
		},
		html2canvas:{
			scale:5,
			letterRendering:true,
		},
		jsPDF:{
			unit:"in",
			format:"a3",
			orientation:'landscape'
		}
	})

	.from($elementoParaConvertir)
	.save()
	.catch(err => console.log(err))
	.finally()


});

});