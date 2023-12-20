<?php

// $servidor= "localhost";//servidor de la base de datos
// $usuario="Marc";//usuraio de la base datos
// $contrasena="asQhhSW@]1HvtoOX";//contraseña de la base de datos
// $base_de_datos="php_login_database";//base de datos


// try {
//   $conn = new PDO("mysql:host=$servidor;dbname=$base_de_datos;", $usuario, $contrasena);
// } catch (PDOException $e) {
//   die('Connection Failed: ' . $e->getMessage());
// }
$conexion= new mysqli("localhost","Marc","asQhhSW@]1HvtoOX","php_login_database","3306");
$conexion->set_charset("utf8");

?>



