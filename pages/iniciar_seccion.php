
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Sistema de ROYDP</title>
 	 <link rel="shortcut icon" href="../img/logo-policia.png" type="image/x-icon">
 	 <link rel="stylesheet" href="../css/iniciarSeccion.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
 	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

 </head>
 <body>
	<section>
		<div class="container-img">
						 <img src="../img/logo-policia.png" alt="">
		</div>
		<p class="tex-regreso"><a href="../bienvenida.html" class="text-decoration-none"><i class="bi bi-arrow-left"></i> Regresar</a></p>

		<?php 
   	include("../php/conexion.php");
    include("../php/controlador.php");
    ?>

		<form action="iniciar_seccion.php" method="post">

			<header>
				<h1>Iniciar Sección</h1>
			</header>
   

			<div class="container-input">
				<label><i class="bi bi-person-fill"></i> Usuario</label>
				<input type="text" placeholder="Ingrese su Usuario" name="correo"></input> 
				   
				 <label><i class="bi bi-lock-fill"></i> Contraseña</label>
				<input type="password" placeholder="Ingrese su Contraseña" name="contrasena"></input>
			</div>
			<br>
	
		 <input type="submit" name="boton" class="btn btn-primary"> </input>
		 <br>
		 <div class="container-p">
			<p>¿No tienes una cuenta?  <a href="registro.php" class="text-decoration-none text-info">Registrate Aquí</a></p>
		 </div>
		</form>
	</section>
 </body>
 </html>
