
<?php 
     require "../php/conexion.php";
     session_start();
$id_user =$_SESSION['id'];

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Vista previa</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <!-- <link rel="stylesheet" href="../css/vistaprevia.css"> -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
     <div class="container">
          <br>
         <a id="btnCrearPdf" class="btn btn-primary ">Generar reporte</a> 
     </div>
       
     
     <div id="datos_guardados" class="container">
          <h1 class="text-center text text-primary">Mis datos</h4>
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
<section class="list-familia">

               <h1 class="text-center text-primary">Carga Familiar</h1>
         
            <table class="table">
                <thead>
                     <tr>
                    <th>Parentesco</th>
                    <th>Nombre completo</th>
                    <th>Edad</th>
                    <th>Condicion medica</th>
                    <th>Cedula</th>
                    <th>Nacimiento</th>
                    <th>Sexo</th>
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
           </tr>
               
            <?php }mysqli_free_result($resultado); ?>
          
            </table>      
        </section>
      
        <script src="../js/generarPDF.js"></script>
</body>
</html>

