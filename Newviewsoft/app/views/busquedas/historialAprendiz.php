<?php require RUTA_APP . '/views/inicio/header.php'; ?><br><br>
  <div class="container">
    <div class="table-responsive">

      <?php if($datos["datos"] != null): ?>

<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="Consulta la novedad">
</div>


<table class="table table-hover table-bordered results">
    		  <thead class="thead-active">
    		    <tr>
              <th class="bg-primary">Documento</th>
              <th class="bg-primary">Ficha</th>
              <th class="bg-primary">Sede</th>
              <th class="bg-primary">Jornada</th>
              <th class="bg-primary">Modalidad</th>
              <th class="bg-primary">Progrma Formacion</th>
              <th class="bg-primary">Trimestre</th>
              <th class="bg-primary">Fecha de registro</th>

              </tr>
              <tr class="warning no-result">
        <td colspan="4"><i class="fa fa-warning"></i> No Existe</td>
         </tr>
    		  </thead>
          <tbody>
          

            <?php foreach($datos['datos'] as $datos1):

                    if($datos1->codigo_ficha != 0 ):
            ?>
            <tr class="active"  id="<?php echo $datos1->codigo_ficha; ?>">
            <td class="active" data-target="ficha"  scope="row"><?php echo $datos1->documento_aprendiz ?></td>
              <td class="active" data-target="ficha"  scope="row"><?php echo $datos1->codigo_ficha ?></td>
              <td data-target="sede"><?php echo $datos1->sede?></td>
              <td data-target="jornada"><?php echo $datos1->jornada ?></td>
              <td data-target="modalidad"><?php echo $datos1->modalidad ?></td>
              <td data-target="programa_formacion" ><?php echo $datos1->programa_formacion ?></td>
              <td data-target="trimestre"><?php echo $datos1->trimestre?></td>
              <td data-target="fecha"><?php echo $datos1->fecha_historial?></td>

            </tr>
                    <?php endif; endforeach; ?>
          </tbody>
    		</table>
  	</div>
  </div>  
 
<?php   
        else:


          echo "<div align='center'><div class='correctos'><span class='closebtn' onclick=this.parentElement.style.display='none';>&times;</span> 
          <strong></strong>No hay novedades que mostrar</div></div>";
          echo "<br><br><br><br>";


        endif; 
      ?>
</div>
<?php require RUTA_APP . '/views/inicio/footer.php'; ?>
