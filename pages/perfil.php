<?php 

require "../php/conexion.php";
session_start();
$message = '';

$id_user =$_SESSION['id'];

// $tabla_familia= "SELECT * FROM familia WHERE id_user='$id_user'";


if(!empty($_POST['guardar1'])) {

	$nacimiento=$_POST['nacimiento'];
	$edad=$_POST['edad'];
	$estado_civil=$_POST['estado_civil'];
	$grupo_sanguineo=$_POST['grupo_sanguineo'];
	$telefono=$_POST['telefono'];
	$talla_pantalon=$_POST['talla_pantalon'];
	$talla_camisa=$_POST['talla_camisa'];
	$talla_botas=$_POST['talla_botas'];
	$grado_de_instruccion=$_POST['grado_de_instruccion'];
	$fecha_ingreso=$_POST['fecha_ingreso'];
	$cohorte_promocion=$_POST['cohorte_promocion'];
	$fecha_ultimo_ascenso=$_POST['fecha_ultimo_ascenso'];
	$tiempo_en_rango=$_POST['tiempo_en_rango'];
	$tiempo_en_servicio=$_POST['tiempo_en_servicio'];
	$ultima_fecha_servicio_RETEN=$_POST['ultima_fecha_servicio_RETEN'];
	$serial_de_credencial=$_POST['serial_de_credencial'];
	$estudia_actualmente=$_POST['estudia_actualmente'];
	$espesifique1=$_POST['espesifique1'];
	$universidad_donde_estudia=$_POST['universidad_donde_estudia'];
	$padece_condicion_fisica=$_POST['padece_condicion_fisica'];
	$espesifique2=$_POST['espesifique2'];



	$sql ="UPDATE users SET nacimiento='$nacimiento',edad='$edad',estado_civil='$estado_civil',grupo_sanguineo='$grupo_sanguineo',telefono='$telefono',talla_pantalon='$talla_pantalon',talla_camisa='$talla_camisa',talla_botas='$talla_botas',grado_de_instruccion='$grado_de_instruccion',fecha_ingreso='$fecha_ingreso',cohorte_promocion='$cohorte_promocion',fecha_ultimo_ascenso='$fecha_ultimo_ascenso',tiempo_en_rango='$tiempo_en_rango',tiempo_en_servicio='$tiempo_en_servicio',ultima_fecha_servicio_RETEN='$ultima_fecha_servicio_RETEN',serial_de_credencial='$serial_de_credencial',estudia_actualmente='$estudia_actualmente',espesifique1='$espesifique1',universidad_donde_estudia='$universidad_donde_estudia',padece_condicion_fisica='$padece_condicion_fisica',espesifique2='$espesifique2'  WHERE id='$id_user'";

	$cosulta = $conexion->prepare($sql);
	if ($cosulta->execute()) {
		$message ='<script>
        alert("Datos guardados");

   </script>';;
	}


}




$message2 = '';


if (!empty($_POST['guardar2']) ){
	$sql = "INSERT INTO familia (id_user,parentesco,nombre_completo,edad,condicion_medica,cedula,nacimiento,sexo) VALUES ('{$id_user}','{$_POST['parentesco']}','{$_POST['nombre_completo']}','{$_POST['edad']}','{$_POST['condicion_medica']}','{$_POST['cedula']}','{$_POST['fecha_nacimiento']}','{$_POST['sexo']}')";
	$stmt = $conexion->prepare($sql);
	
		if ($stmt->execute()) {
			$message2 = '<script>
        alert("familiar registrado");

   </script>';
		} else {
			$message2 = '<script>
        alert("familiar no resitrado");

   </script>';
		}

}


?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de ROYDP</title>
	<link rel="shortcut icon" href="img/logo-policia.png" type="image/x-icon">
	<link rel="stylesheet" href="../css/principal.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="../css/perfil.css">
	<link rel="shortcut icon" href="../img/logo-policia.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script type="text/javascript">
		function confirmar() {
			return confirm('¿Estas seguro?, se eliminaran los datos');
		}
	</script>


</head>
<body>
	<br>
	<a href="user.php" class="text-decoration-none "><i class="bi bi-arrow-left"></i> Regresar</a>
	<br>

	<header>
		<div>
			<h1>Perfil</h1>
			<p>En esta sección podras agregar información extra a tu perfil</p>
		</div>
	</header>

	<?php if(!empty($message)): ?>
		<p> <?= $message ?></p>
	<?php endif; ?>
	<?php if(!empty($message2)): ?>
	<p> <?= $message2 ?></p>
<?php endif; ?>


<section class="datos_personales">

		<form action="perfil.php" method="post">
		
			<h3 class="text text-primary">Datos personales</h3>
			<label for="">lugar y fecha de nacimiento</label>
			<input type="text" required name="nacimiento" >
			<label for="">Edad</label>
			<input type="number" required name="edad">
			<label for="">Estado civil</label>
			<input  type="tex"  requiredplaceholder="Ingrese su estado civil" name="estado_civil">
			</input>
			<label for="">Grupo sanguineo</label>
			<input type="text" required name="grupo_sanguineo">
			<label for="">Numero de telefono</label>
			<input type="text" required name="telefono">
			<label for="">Talla de pantalón</label>
			<input type="text" required name="talla_pantalon">
			<label for="">Talla de camisa</label>
			<input type="text" required name="talla_camisa">
			<label for="">Talla de botas</label>
			<input type="text" required name="talla_botas">
			<label for="">Grado de instrucción</label>
			<input type="text" required name="grado_de_instruccion">
			<label for="">Fecha de ingreso</label>
			<input type="date" required name="fecha_ingreso">
			<label for="">Cohorte de promoción</label>
			<input type="text" required name="cohorte_promocion">
			<label for="">Fecha de ultimo ascenso</label>
			<input type="date" required name="fecha_ultimo_ascenso">
			<label for="">Tiempo en el rango</label>
			<input type="text" required name="tiempo_en_rango">	
			<label for="">Tiempo en el servicio</label>
			<input type="text" required name="tiempo_en_servicio">
			<label for="">Última fecha del servicio del RETEN</label>
			<input type="date" required name="ultima_fecha_servicio_RETEN">
			<label for="">Serial de la credencial</label>
			<input type="text" required name="serial_de_credencial">
			<label for="">Estudia actualmente</label>
			<input type="text" required name="estudia_actualmente"></input >
			<label for="">Especifique</label>
			<input type="text" required name="espesifique1">
			<label for="">Universidad donde cursa los estudios</label>
			<input type="text" required name="universidad_donde_estudia">
			<label for="">Padece de alguna condición fisica</label>
			<input  type="text" required name="padece_condicion_fisica"></input>
			<label for="">Especifique</label>
			<input type="text" required name="espesifique2">
		<br>
		<div>
			<input type="submit" value="Guardar" name="guardar1" class="btn btn-dark">
			
			
		</div>
			
	</form>

	<div class="">
		<h4 class="text text-success">Datos guardados</h4>
	<?php 
	$consultasql= $conexion->query("SELECT * FROM users WHERE id='$id_user'");
             $resultadosql= $consultasql;
            $fila_user= mysqli_fetch_array($resultadosql);?>

            <p> <b>Lugar y Fecha de nacimiento:</b> <br> <?php echo $fila_user['nacimiento'] ; ?></p>
            <p><b>Edad</b> <br> <?php echo $fila_user['edad'] ; ?></p>
            <p><b>Estado civil</b><br><?php echo $fila_user['estado_civil'] ; ?></p>
            <p><b>Grupo saguineo</b><br> <?php echo $fila_user['grupo_sanguineo'] ; ?></p>
            <p><b>Numero de telefono</b><br> <?php echo $fila_user['telefono'] ; ?></p>
            <p><b>Talla de pantalon</b><br> <?php echo $fila_user['talla_pantalon'] ; ?></p>
            <p><b>Talla de camisa</b><br> <?php echo $fila_user['talla_camisa'] ; ?></p>
            <p><b>Talla de botas</b><br> <?php echo $fila_user['talla_botas'] ; ?></p>
            <p><b>Grado de instrucción</b><br> <?php echo $fila_user['grado_de_instruccion'] ; ?></p>
            <p><b>Fecha de ingreso</b><br> <?php echo $fila_user['fecha_ingreso'] ; ?></p>
            <p><b>Cohorte de Promoción</b><br> <?php echo $fila_user['cohorte_promocion'] ; ?></p>
            <p><b>Fecha de ultimo Ascenso</b><br> <?php echo $fila_user['fecha_ultimo_ascenso'] ; ?></p>
            <p><b>Tiempo en el rango</b><br> <?php echo $fila_user['tiempo_en_rango'] ; ?></p>
            <p><b>Tiempo en el servicio</b><br> <?php echo $fila_user['tiempo_en_servicio'] ; ?></p>
            <p><b>Última fecha del servicio del RETEN</b><br> <?php echo $fila_user['ultima_fecha_servicio_RETEN'] ; ?></p>
            <p><b>Serial de la credencial</b><br> <?php echo $fila_user['serial_de_credencial'] ; ?></p>
            <p><b>Estudia actualmente</b><br> <?php echo $fila_user['estudia_actualmente'] ; ?></p>
              <p><b>Especifique</b><br> <?php echo $fila_user['espesifique1'] ; ?></p>
             <p><b>Universidad donde cursa los estudios</b><br> <?php echo $fila_user['universidad_donde_estudia'] ; ?></p>
            <p><b>Padece de alguna condición fisica</b><br> <?php echo $fila_user['padece_condicion_fisica'] ; ?></p>
            <p><b>Especifique</b><br> <?php echo $fila_user['espesifique2'] ; ?></p>
	</div>
</section>

	


<br>

 <header>
         <h4>Lista de familiares</h4>
   </header>
        <section class="list-familia">
         
            <table class="table table-hover">
                <thead>
                     <tr>
                    <th>Parentesco</th>
                    <th>Nombre completo</th>
                    <th>Edad</th>
                    <th>Condicion medica</th>
                    <th>Cedula</th>
                    <th>Nacimiento</th>
                    <th>Sexo</th>
                    <th>Acciones</th>
                    </tr>
                </thead>
               
            
                <?php 
                $sql= $conexion->query("SELECT * FROM familia WHERE id_user='$id_user'");
                $resultado= $sql;

                while ( $filas= mysqli_fetch_array($resultado)){?>
                   
              
           <tr>
                <td><?php echo $filas['parentesco'];?></td>
                <td><?php echo $filas['nombre_completo']; ?></td>
               <td><?php echo $filas['edad'] ; ?></td>
               <td><?php echo $filas['condicion_medica'] ; ?></td>
               <td><?php echo $filas['cedula'] ; ?></td>
               <td><?php echo $filas['nacimiento'] ; ?></td>
               <td><?php echo $filas['sexo'] ; ?></td>
               <td><?php  echo"<a href='editar.php?id=".$filas['id_familia']."'>Editar</a>"?></td>
          <td><?php  echo"<a href='eliminar.php?id=".$filas['id_familia']."' onclick='return confirmar()'>Eliminar</a>"?></td>
           </tr>
               
            <?php }mysqli_free_result($resultado); ?>
          
            </table>      
        </section>
        <br>
        <br>
        <a >Carga Familiar <span id="mostrarFamilia" class=" btn btn-info">+</span></a>
        <br>
        <br>

<form action="perfil.php" method="post" id="family" style="display: none;">
	<section class="familiar">
		<h3>Datos de cargo familiar</h3>
		<label for="">Parentesco</label>
		<input type="text" name="parentesco" placeholder="Escriba parentesco">
		<label for="">Nombre y Apellido</label>
		<input type="text" required name="nombre_completo">
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
			<input type="submit" value="Guardar" name="guardar2" class="btn btn-dark">
			
		</div>
	</section>
		
</form>
<script src="../js/form.js"></script>
</body>
</html>