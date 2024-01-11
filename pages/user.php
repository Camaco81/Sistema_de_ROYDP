<?php
$message='';
session_start();
    $usuario=$_SESSION['correo'];
    if (!isset($usuario)) {
        header("location:../bienvenida.html");
    }
    else{
        $message= "<p> $usuario</p>";
    }
   
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de ROYDP</title>
    <link rel="shortcut icon" href="../img/logo-policia.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/user.css"/>
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
<body class="bg-claro">
   
    <nav>
         <header>
             <h1>Bienvenido al Sistema De ROYDP empleado</h1>
             <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
         <?php endif; ?>
        </header>
    

        <a id="activar-menu" >
           <i class="bi bi-nut-fill"></i>
        </a>

    </nav>
      
            
            <?php $id_user =$_SESSION['id']; ?>

      <div class="menu" id="menu">
            <ul>
            <li><a href="perfil.php"><i class="bi bi-person-fill"></i> Personalizar perfil</a></li>
            <li><a id="activo"><i class="bi bi-moon"></i> Modo oscuro</a></li>
            <li><a href=""><i class="bi bi-question-circle"></i> Preguntas frecuentes</a></li>
            <li><a href="cerrarSeccion.php"><i class="bi bi-box-arrow-left"></i> Cerrar sección</a></li>  
            </ul>

        </div>
    <section class="info-basic">
        <h1>Información basica acerca de como funciona el sistema</h1>
        <p>Este sistema se encarga de ayudarte a manejar tus datos de una manera mas sencilla y practica, si quieres agregar datos y manejar tu informacion
    </p>
    <p>
       Dirigete a ajustes <i class="bi bi-nut-fill"></i> en  Personalizar perfil <i class="bi bi-person-fill"></i>  y agrega mas informacion detallada para mejora tus datos para facilitar tu informacion en tu trabajo</p>

       <p>Si necesitas mas informacion detalla con respecto alas cosa que pudes realizar o alguna otra pregunta dirigete a ajustes <i class="bi bi-nut-fill"></i> en  preguntas frecuentes <i class="bi bi-question-circle"></i></p>

       <p>¿Desea activar modo oscuro? dirigete a ajustes <i class="bi bi-nut-fill"></i> en  Modo oscuro <i class="bi bi-moon"></i></p>
        <p>¿Desea cerra sección? dirigete a ajustes <i class="bi bi-nut-fill"></i> en  Cerrar sección <i class="bi bi-box-arrow-left"></i></p>
    </section>

    <script src="../js/menu.js"></script>
</body>
</html>