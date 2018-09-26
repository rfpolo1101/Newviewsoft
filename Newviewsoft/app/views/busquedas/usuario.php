<?php require RUTA_APP . '/views/inicio/header.php'; ?><br><br>
    <div class="table-responsive">

  <?php if($datos["datos"] != null): ?>
  <div class="container">
		<table class="table table-bordered">
		  <thead class="thead-dark">
		    <tr>
        <th>Tipo Documento</th>
          <th>Documento</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Email</th>
          <th>Cargo</th>
          <th>Editar</th>
          <th>Eliminar</th>
		    </tr>
		  </thead>
        <?php foreach($datos['datos'] as $datos) :
          if($datos->tipo_rol != "Aprendiz"):?>

        <tr class="bg-primary">
          <td><?php echo $datos->tipo_documento ?></td>
          <td><?php echo substr($datos->documento, 2) ?></td>
          <td><?php echo $datos->primer_nombre?></td>
          <td><?php echo $datos->primer_apellido ?></td>
          <td><?php echo $datos->correo?></td>
          <td><?php echo $datos->tipo_rol ?></td>
          <td><a href="#" data-role="update" data-id="<?php echo $datos1->id_novedad?>" id="up-el">editar</a></td>
          <td><a href="#" data-role="" data-id="<?php echo $datos1->id_novedad?>" id="up-el">eliminar</a></td>
          
        </tr>
        <?php endif; endforeach; ?>
   

         
         </tr>
		  </tbody>
		</table>
	</div>
    <?php   

        else:

          echo "<br><br><br><br>";


        endif; 
      ?>
    </div>  
  </div>
</div>
<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">

    <div class="col-md-4 col-xs-4 col-sm-4 col-lg-4">  
    </div>

    <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
      <div class="container-fluid">
        <br>
        <nav class="pagination">
          <li><a href="#">&laquo; Anterior</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">&raquo; Siguente</a></li>
        </nav>
      </div>
    </div>

    <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2">
    	
    </div>
</div>


<?php require RUTA_APP . '/views/inicio/footer.php'; ?>
