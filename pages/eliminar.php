<?php 
$id=$_GET["id"];

include("../php/conexion.php");

//delete from familia where id=$id

$sql ="DELETE  FROM  familia WHERE id_familia='".$id."'";
		$resultado=mysqli_query($conexion,$sql);


if ($resultado) {
	echo '<script>
        alert("Los datos fueron eliminados correctamente");
        window.location="perfil.php";
        </script>';

}
else{

	echo '<script>
        alert("Los datos no fueron eliminados de la base de datos");
        window.location="perfil.php";
        </script>';
}


 ?>