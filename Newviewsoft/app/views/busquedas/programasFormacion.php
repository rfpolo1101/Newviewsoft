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
              <th class="bg-primary">Identificador</th>
              <th class="bg-primary">Progrma de Formacion</th>
              <th class="bg-primary">Competencia</th>
              <th class="bg-primary">Trimestre Diurno</th>
              <th class="bg-primary">Trimestre Nocturno</th>
              <th class="bg-primary">Resultado de Aprendizaje</th>
              </tr>
              <tr class="warning no-result">
        <td colspan="4"><i class="fa fa-warning"></i> No Existe</td>
         </tr>
    		  </thead>
          <tbody>
          
            <?php $cont =0;?>
            <?php foreach($datos['datos'] as $datos1):
            $cont++;
            ?>
            <tr class="active"  id="<?php echo $cont; ?>">
              <td class="active" data-target="ficha"  scope="row"><?php echo $cont?></td>
              <td data-target="sede"><?php echo $datos1->programa_formacion?></td>
              <td data-target="jornada"><?php echo $datos1->competencia ?></td>
              <td data-target="modalidad"><?php echo $datos1->trimestre_diurno ?></td>
              <td data-target="programa_formacion" ><?php echo $datos1->trimestre_especial ?></td>
              <td data-target="trimestre"><?php echo $datos1->resultado_aprendizaje?></td>
            </tr>
                    <?php endforeach; ?>
          </tbody>
    		</table>
  	</div>
  </div>  
 


    <div class="col-md-2 col-xs-2 col-sm-2 col-lg-2">
    	
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
