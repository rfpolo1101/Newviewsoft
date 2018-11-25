<?php require RUTA_APP . '/views/inicio/header.php'; ?><br><br>
<div class="container">
    <div class="table-responsive">

  <?php if($datos["datos"] != null): ?>
      <table  class="table  table-bordered table-hover table-condensed" class="info" >
        <tr class="active info">
          <th>Tipo Documento</th>
          <th>Documento</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Email</th>
          <th>Cargo</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
        <?php foreach($datos['datos'] as $datos) :?>
        <tr>
          <td><?php echo $datos->tipo_documento ?></td>
          <td><?php echo $datos->documento ?></td>
          <td><?php echo $datos->primer_nombre?></td>
          <td><?php echo $datos->primer_apellido ?></td>
          <td><?php echo $datos->correo?></td>
          <td><?php echo $datos->tipo_rol ?></td>
          <td><img src="img/editarr.png" alt=""></a></td>
          <td><img src="img/borrarr.png" alt=""></td>
          
        </tr>
        <?php endforeach; ?>
   

         

        </tr>
</table> 
    <?php   

        else:

          echo "<br><br><br><br>";


        endif; 
      ?>
    </div>  
  </div>


<?php require RUTA_APP . '/views/inicio/footer.php'; ?>
