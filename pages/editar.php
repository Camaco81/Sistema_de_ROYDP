<?php
	include("../php/conexion.php");

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/perfil.css">
	
</head>
<body>
	<?php 
	
	if (isset($_POST['enviar'])) {
		//se ejecuta si el usuario ha oprimido el boton de enviar
		$id=$_POST['id'];
		$parentesco=$_POST["parentesco"];
		$nombre=$_POST["nombre_completo"];
		$edad=$_POST["edad"];
		$cedula=$_POST["cedula"];
		$fecha_nacimiento=$_POST["fecha_nacimiento"];
		$sexo=$_POST["sexo"];

		$sql ="UPDATE familia SET parentesco='$parentesco',nombre_completo='$nombre',edad='$edad',cedula='$cedula',nacimiento='$fecha_nacimiento',sexo='$sexo'  WHERE id_familia='".$id."'";
		$resultado=mysqli_query($conexion,$sql);

		if ($resultado) {
			echo '<script>
        alert("Los datos han sido actualizados");
        window.location="perfil.php";

   </script>';
		} else {
			echo '<script>
        alert("Los datos no han sido actualizados");
        

   </script>';
		}
		 mysqli_close($conexion);

	}
	else{
		//aqui entra si el usuario no ha oprimido el boton de enviar
		$id=$_GET['id'];

		 $sql= "SELECT * FROM familia WHERE id_familia='".$id."'";
                $resultado= mysqli_query($conexion,$sql);
                $fila=mysqli_fetch_assoc($resultado);
                $nombre=$fila["nombre_completo"];
                $parentesco=$fila["parentesco"];
                

                mysqli_close($conexion);

	 ?>
	
	
	<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
	<section class="familiar">
		<h3>Editar dato del familiar</h3>
		<input type="hidden" name="id" value="<?php echo $id;?>">
		<label for="">Parentesco</label>
		<input type="text" name="parentesco" placeholder="Escriba parentesco" value="<?php echo $parentesco?>">
		<label for="">Nombre y Apellido</label>
		<input type="text" required name="nombre_completo" value="<?php echo $nombre ?>">
		<label for="">Edad</label>
		<input type="number" required name="edad">
		<label for="">CI</label>
		<input type="text" required name="cedula" >
		<label for="">Fecha de nacimiento</label>
		<input type="date" required name="fecha_nacimiento" >
		<label for="">Padece alguna condicion medica(alguno de los familiares)</label>
		<input type="text"  required name="condicion_medica" >
		<label for="">Sexo</label>
		<input type="text" requiered name="sexo">
	</input>
	<br>
	<div>
			<input type="submit" value="Actualizar" name="enviar" class="btn btn-dark"><br>
			<a href="perfil.php" class="text-center">Regresar</a>
			
		</div>
	</section>
		
</form><?php } ?>
</body>
</html>