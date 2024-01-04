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
   $filas= mysqli_fetch_array($resultado);

    $_SESSION['correo']=$usuario;
    $_SESSION['id']=$filas['id'];
   if ($filas['id_cargo']==1) {
    header("location:admit.php"); 
  }else
  if ($filas['id_cargo']==2) {
   header("location:user.php"); 
 }
 else{
  echo '<div class="alert alert-danger">Acceso denegado</div>';

}

}

}

?>

