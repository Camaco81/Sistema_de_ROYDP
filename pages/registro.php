 <?php

  require '../php/conexion.php';

  $message = '';

 
  if (!empty($_POST['correo']) && !empty($_POST['contrasena'])) {
    $sql = "INSERT INTO users (correo, contrasena) VALUES ('{$_POST['correo']}','{$_POST['contrasena']}' )";
    $stmt = $conexion->prepare($sql);
    $password = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);
    $usuario= $_POST["correo"];
    $verificar_correo=mysqli_query($conexion,"select * from users where correo='$usuario'");

    if (mysqli_num_rows($verificar_correo)>0) {
     echo'<script>
        alert("Este correo ya esta registrado,intenta con uno diferente");
        window.location="../bienvenida.html";
   </script>';
   exit();
} else {
     if ($stmt->execute()) {
      $message = '<div class="alert alert-success">Usuario Registrado Exitosamente</div>';
    } else {
      $message = 'Lo sentimos no se pudo crer su Usuario';
    }
}

  }
  if (!empty($_POST["boton1"])) {
  if (empty($_POST["coreo"])and empty($_POST["contrasena"])and empty($_POST["confirm_contrasena"])) {
    $message= '<div class="alert alert-danger">Los Campos estan vacios</div>';
  }
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Sistema de ROYDP</title>
 	<link rel="shortcut icon" href="../img/logo-policia.png" type="image/x-icon">
 	<link rel="stylesheet" href="../css/registro.css">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

 </head>
 <body>
     <section>
         <div class="container-img">
                <img src="../img/logo-policia.png" alt="">
         </div>

         <p class="tex-regreso"><a href="../bienvenida.html"><i class="bi bi-arrow-left"></i> Regresar</a></p>

          <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
         <?php endif; ?>
         <form action="registro.php" method="post">

             <header><h1>Registro</h1></header>
             <div class="container-select">
                <label for="">Opción de registro</label>
				<select>
					<option value="Empleado">Empleado</option>
					<option value="Administrador">Administrador</option>
				</select>
			</div>
            <div class="container-input">
                <label for="">Correo</label>
                <input type="email" placeholder="Ingrese su correo" name="correo"></input>
         <label>Contraseña</label>
                <input type="password" placeholder="Ingrese contraseña" name="contrasena"></input>
            <label>Repetir Contraseña</label>
                <input type="password" placeholder="Confirme  contraseña" name="cofirm_contrasena"></input>
                 <div class="container-button">
                    <input type="submit" name="boton1"></input>
                </div>
                    <div class="container-p">
                        <p>¿Ya tienes una cuenta?  <a href="iniciar_seccion.php">Inicia sección Aquí</a></p>
                     </div>
            </form>
          
           
     </section>
 	
 </body>
 </html>