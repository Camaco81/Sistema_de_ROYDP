<?php

session_start();

if (!empty($_POST["boton"])) {
  if (empty($_POST["coreo"])and empty($_POST["contrasena"])) {
    echo '<div class="alert alert-danger">Los Campos estan vacios</div>';
  } else {
   $usuario= $_POST["correo"];
   $clave= $_POST["contrasena"];
   $sql= $conexion->query(" select * from users where correo='$usuario' and contrasena='$clave' ");
   $resultado= $sql;
   $row= $resultado->num_rows;

   if ($row>0) {
    $row= $resultado->fetch_assoc();
    $_SESSION['username']=$usuario;
     header("location:principal.php"); 
   }else{
      echo '<div class="alert alert-danger">Acceso denegado</div>';
   
   }
   
  }
  
}

?>