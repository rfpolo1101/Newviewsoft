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
              <th class="bg-primary">Ficha</th>
              <th class="bg-primary">Sede</th>
              <th class="bg-primary">Jornada</th>
              <th class="bg-primary">Modalidad</th>
              <th class="bg-primary">Progrma Formacion</th>
              <th class="bg-primary">Trimestre</th>
              <th class="bg-primary">Estado</th>
<?php if (isset($_SESSION["Administrador"]) or isset($_SESSION["Super_admin"]) or isset($_SESSION["Apoyo_admin"]) ): ?> <th class="bg-primary">Editar</th><?php endif; ?>
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
              <td class="active" data-target="ficha"  scope="row"><?php echo $datos1->codigo_ficha ?></td>
              <td data-target="sede"><?php echo $datos1->sede?></td>
              <td data-target="jornada"><?php echo $datos1->jornada ?></td>
              <td data-target="modalidad"><?php echo $datos1->modalidad ?></td>
              <td data-target="programa_formacion" ><?php echo $datos1->programa_formacion ?></td>
              <td data-target="trimestre"><?php echo $datos1->trimestre?></td>
              <td data-target="estado"><?php echo $datos1->estado ?></td>
                    <?php if (isset($_SESSION["Administrador"]) or isset($_SESSION["Super_admin"]) or isset($_SESSION["Apoyo_admin"]) ): ?> <td><a href="#" data-role="update" data-id="<?php echo $datos1->codigo_ficha?>" id="up-el"><img src="<?php echo RUTA_URL?>/img/editar.png" style="width:30px;" ></a></td><?php endif; ?>
              <td data-target="fk_sede" hidden> <?php echo $datos1->fk_sede ?></td>
              <td data-target="fk_jornada" hidden> <?php echo $datos1->fk_jornada ?></td>
              <td data-target="fk_modalidad" hidden> <?php echo $datos1->fk_modalidad ?></td>
              <td data-target="fk_programa_formacion" hidden> <?php echo $datos1->fk_programa_formacion ?></td>
              <td data-target="fk_trimestre" hidden> <?php echo $datos1->fk_trimestre ?></td>
              <td data-target="fk_estado" hidden> <?php echo $datos1->fk_estado ?></td>




            </tr>
                    <?php endif; endforeach; ?>
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
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Actualizar novedad</h4>
          </div>
          <form method="post" action="<?php echo RUTA_URL  ?>/buscar/fichas" enctype="multipart/form-data">
          <div class="modal-body">
          <div class="form-group">
                <label>Ficha</label>
                <select name="ficha" id="ficha" class="form-control" >
                <?php foreach($datos["datos"] as $t): if($t->codigo_ficha != 0):  ?>
                <option value="<?php echo $t->codigo_ficha ?>" id="ficha"><?php echo $t->codigo_ficha; ?></option>
                <?php endif;endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label>Sede</label>
                <select name="sede" id="sede" class="form-control" >
                <?php foreach($datos["sede"] as $t):
                            if($t->sede != "Null"): ?>
                <option value="<?php echo $t->id_sede ?>" id="sede"><?php echo $t->sede; ?></option>
                <?php endif;endforeach; ?>
                </select>            
                  </div>

               <div class="form-group">
                <label>Jornada</label>
                <select name="jornada" id="jornada" class="form-control" >
                <?php foreach($datos["jornada"] as $t):
                            if($t->jornada != "Null"): ?>
                <option value="<?php echo $t->id_jornada ?>" id="jornada"><?php echo $t->jornada; ?></option>
                <?php endif;endforeach; ?>
                </select>
              </div>

                     <div class="form-group">
                <label>Modalidad</label>
                <select name="modalidad" id="modalidad" class="form-control" >
                <?php foreach($datos["modalidad"] as $t):
                            if($t->modalidad != "Null"): ?>
                <option value="<?php echo $t->id_modalidad ?>" id="modalidad"><?php echo $t->modalidad; ?></option>
                <?php endif;endforeach; ?>
                </select>             
                 </div>
              <div class="form-group">
                <label>Programa Formacion</label>
                <select name="programa_formacion" id="programa_formacion" class="form-control" >
                <?php foreach($datos["programa_formacion"] as $t):
                            if($t->programa_formacion != "Null"): ?>
                <option value="<?php echo $t->id_programa_formacion ?>" id="programa_formacion"><?php echo $t->programa_formacion; ?></option>
                <?php endif;endforeach; ?>
                </select>                 </div>
              <div class="form-group">
                <label>Trimestre</label>
                <select name="trimestre" id="trimestre" class="form-control" >
                <?php foreach($datos["trimestre"] as $t):
                            if($t->trimestre != "Null"): ?>
                <option value="<?php echo $t->id_trimestre ?>" id="trimestre"><?php echo $t->trimestre; ?></option>
                <?php endif;endforeach; ?>
                </select>                 </div>

             <div class="form-group">
                <label>Estado</label>
                <select name="id_estado" id="id_estado" class="form-control" >
                <option value="1" id="id_estado">Activo</option>
                <option value="2" id="id_estado">Inactivo</option>
              </div>

                <input type="hidden" id="userId" class="form-control">

          </div>
          <div class="modal-footer">
          <input class="button" type="submit" name="button" id="button" value="Actualizar"/>
          </form>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    

    <script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
        
            var id  = $(this).data('id');
            var ficha  = $('#'+id).children('td[data-target=ficha]').text();
            var sede  = $('#'+id).children('td[data-target=fk_sede]').text();
            var jornada  = $('#'+id).children('td[data-target=fk_jornada]').text();
            var modalidad  = $('#'+id).children('td[data-target=fk_modalidad]').text();
            var programa_formacion  = $('#'+id).children('td[data-target=fk_programa_formacion]').text();
            var trimestre  = $('#'+id).children('td[data-target=fk_trimestre]').text();
            var estado  = $('#'+id).children('td[data-target=fk_estado]').text();

            $('#sede').val(parseInt(sede));
            $('#jornada').val(parseInt(jornada));
            $('#modalidad').val(parseInt(modalidad));
            $('#programa_formacion').val(parseInt(programa_formacion));
            $('#trimestre').val(parseInt(trimestre));
            $('#id_estado').val(parseInt(estado));
            $('#ficha').val(parseInt(ficha));
            $('#myModal').modal('toggle');
          
      });

       
  });
</script></div></div>
<?php require RUTA_APP . '/views/inicio/footer.php'; ?>
