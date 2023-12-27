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
   
  ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de ROYDP</title>
    <link rel="shortcut icon" href="../img/logo-policia.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/principal.css"/>
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
         <div>
             <h1>Bienvenido al Sistema De ROYDP empleado</h1>
             <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
         <?php endif; ?>
        </div>
     


        <a href="#" id="activar-menu" ><i class="bi bi-nut-fill"></i></a>
    </nav>
      
            

      <div class="menu" id="menu">
            <ul>
            <li><a href="perfil.html"><i class="bi bi-person-fill"></i> Personalizar perfil</a></li>
            <li><a href=""><i class="bi bi-moon"></i> Modo oscuro</a></li>
            <li><a href=""><i class="bi bi-question-circle"></i> Preguntas frecuentes</a></li>
            <li><a href="cerrarSeccion.php"><i class="bi bi-box-arrow-left"></i> Cerrar sección</a></li>  
            </ul>

        </div>
    <section class="info-basic">
        <h1>Estos son tus datos basicos</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic dolorem eos sint pariatur consequuntur dolores maiores id earum ex atque ducimus repellendus magni ab, vero exercitationem dicta. Nulla repellat, sint.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium enim odio quae repudiandae, alias modi libero aliquid similique illo omnis harum. Dolor modi, distinctio libero eaque impedit consequatur voluptatem. Voluptatibus!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro qui necessitatibus reiciendis soluta illo ab explicabo consequuntur rerum obcaecati, quidem corrupti eligendi similique veritatis odit doloremque provident nemo possimus voluptatem?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus vero magni neque nostrum quidem temporibus iste molestiae facere, corporis tempore voluptatibus cupiditate eum itaque atque suscipit, doloribus laboriosam fugiat nam.</p>
        <p>¿Desea agreagar mas informacion?</p>
        <p>Dirigete a ajustes <i class="bi bi-nut-fill"></i> en  personaliza tu perfil y arega mas informacion detallada para mejora tus datos para facilitar tu informacinon en tu trabajo</p>
    </section>
    <script src="../js/menu.js"></script>
</body>
</html>