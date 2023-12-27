<?php 
	header("Content-Type: application/xls");
	header("Content-Disposition: attchment; filename=registro.xls");

 ?>

<?php 

 include("../php/conexion.php"); ?>
     <table>
                <thead>
                     <tr>
                    <th>Nombre completo</th>
                    <th>Cedula</th>
                    <th>Jeraquia</th>
                    <th>Correo</th>
                    <th>Cargo</th>
                    </tr>
                </thead>
               
            
                <?php 
                $sql= $conexion->query(" select * from users ");
                $resultado= $sql;
                while ( $filas= mysqli_fetch_array($resultado)){?>
                   
              
           <tr>
                <td><?php echo $filas['nombre_completo']; ?></td>
                <td><?php echo $filas['cedula'];?></td>
                <td><?php echo $filas['jerarquia']; ?></td>
               <td><?php echo $filas['correo'] ; ?></td>
              
               <td><?php echo $filas['id_cargo'] == '1' ? 'administrador' : 'empleado'; ?></td>
           </tr>
               
            <?php }mysqli_free_result($resultado); ?>
          

            </table>