<?php

$message='';
session_start();
    $usuario=$_SESSION['username'];
    if (!isset($usuario)) {
        header("location:iniciar_seccion.php");
    }
    else{
        $message= "<p> $usuario</p>";
    }
     include("../php/conexion.php");
    $usuarios= "SELCT * FROM users";
   
  ?>
  <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de ROYDP</title>
    <link rel="shortcut icon" href="../img/logo-policia.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/admit.css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        <link rel="shortcut icon" href="../img/logo-policia.png" type="image/x-icon">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&display=swap" rel="stylesheet">

</head>
<body>

    <nav>
         <header class="title-info">
             <h1>Bienvenido al Sistema De ROYDP  admit</h1>
             <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
         <?php endif; ?>
        </header>
     


        <a  id="activar-menu" ><i class="bi bi-nut-fill"></i></a>
    </nav>
      
            

      <div class="menu" id="menu">
            <ul>
            <li><a href=""><i class="bi bi-moon"></i> Modo oscuro</a></li>
            <li><a href=""><i class="bi bi-question-circle"></i> Preguntas frecuentes</a></li>
            <li><a href="cerrarSeccion.php"><i class="bi bi-box-arrow-left"></i> Cerrar sección</a></li>  
            </ul>

        </div>

           <header>
               <h1>Lista de Usuarios</h1>
           </header>
        <section>
         
            <table>
                <thead>
                     <tr>
                    <th>Correo</th>
                    <th>Cotraseña</th>
                    <th>Cargo</th>
                    </tr>
                </thead>
               
            
                <?php 
                $sql= $conexion->query(" select * from users ");
                $resultado= $sql;
                while ( $filas= mysqli_fetch_array($resultado)){?>
                   
              
           <tr>
               <td><?php echo $filas['correo'] ; ?></td>
               <td><?php echo $filas['contrasena']; ?></td>
               <td><?php echo $filas['id_cargo'] == '1' ? 'administrador' : 'empleado'; ?></td>
           </tr>
               
            <?php }mysqli_free_result($resultado); ?>
          

            </table>
        </section>
   
    <script src="../js/menu.js"></script>
</body>
</html>