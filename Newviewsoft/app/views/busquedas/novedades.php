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
              <th class="bg-primary">Primer nombre</th>
              <th class="bg-primary">Segundo nombre</th>
              <th class="bg-primary">Primer apellido</th>
              <th class="bg-primary">Segundo apellido</th>
              <th class="bg-primary">Email</th>
              <th class="bg-primary">Novedad</th>
              <?php if($datos["xd"] == 5){echo "<th class='bg-primary' >fallas</th>";
              echo "<th class='bg-primary' >Intructor</th>";
              } ?>
              <th class="bg-primary">Motivo</th>
              <th class="bg-primary">Respuesta</th>
              <th class="bg-primary">Fecha inicial</th>
              <th class="bg-primary">Fecha final</th>
              <th class="bg-primary">Acta</th>
              <th class="bg-primary">Tipo respuesta</th>
            <?php if (isset($_SESSION["Administrador"]) or isset($_SESSION["Super_admin"]) or isset($_SESSION["Apoyo_admin"]) ): ?> <th class="bg-primary">Editar</th><?php endif; ?>
              </tr>
              <tr class="warning no-result">
        <td colspan="4"><i class="fa fa-warning"></i> No Existe</td>
         </tr>
    		  </thead>
          <tbody>
          

            <?php foreach($datos['datos'] as $datos1):

                    if($datos1->id_tipo_novedad == $datos["xd"] ):
            ?>
            <tr class="active"  id="<?php echo $datos1->id_novedad; ?>">
              <td class="active" data-target="documento"  scope="row"><?php echo $datos1->documento ?></td>
              <td data-target="primer_nombre"><?php echo $datos1->primer_nombre?></td>
              <td data-target="segundo_nombre"><?php echo $datos1->segundo_nombre ?></td>
              <td data-target="primer_apellido"><?php echo $datos1->primer_apellido ?></td>
              <td data-target="segundo_apellido" ><?php echo $datos1->segundo_apellido ?></td>
              <td data-target="email"><?php echo $datos1->correo?></td>
              <td data-target="novedad"><?php echo $datos1->tipo_novedad ?></td>
              <?php if($datos["xd"] == 5){echo "<td data-target='fallas'>$datos1->fallas</td>";
              echo "<td data-target='instructor'>$datos1->instructor_encargado</td>";
              }?>
              <td data-target="motivo"><?php echo $datos1->motivo?></td>
              <td data-target="respuesta"><?php echo $datos1->respuesta ?></td>
              <td data-target="fecha_inicio" ><?php echo $datos1->fecha_inicio ?></td>
              <td data-target="fecha_final"><?php echo $datos1->fecha_fin ?></td>
              <td data-target="acta"><a href="<?php echo RUTA_URL . "/buscar/novedades/" . $datos['xd'] . "?file=$datos1->acta"?>"><?php echo $datos1->acta ?></a></td>
              <td data-target="tipo_respuesta"><?php echo $datos1->tipo_respuesta ?></td>
            <?php if (isset($_SESSION["Administrador"]) or isset($_SESSION["Super_admin"]) or isset($_SESSION["Apoyo_admin"]) ): ?><td><a href="#" data-role="update" data-id="<?php echo $datos1->id_novedad?>" id="up-el"><img src="<?php echo RUTA_URL?>/img/editar.png" style="width:30px;" ></a></td><?php endif; ?>
              <td data-target="id_tipo_respuesta" hidden> <?php echo $datos1->id_tipo_respuesta ?></td>
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
          <form method="post" action="<?php echo RUTA_URL  ?>/buscar/novedades/2" enctype="multipart/form-data">
          <div class="modal-body">
          <div class="form-group">
                <label>Documento</label>
                <input type="text" id="documento" class="form-control" name="documento"  readonly="readonly">
              </div>
              <div class="form-group">
                <label>Primer nombre</label>
                <input type="text" id="primer_nombre" class="form-control" name="primer_nombre">
              </div>

               <div class="form-group">
                <label>Segundo nombre</label>
                <input type="text" id="segundo_nombre" name="segundo_nombre" class="form-control">
              </div>
                <input type="hidden" id="userId" class="form-control">

                     <div class="form-group">
                <label>Primer_apellido</label>
                <input type="text" id="primer_apellido" name="primer_apellido" class="form-control">
              </div>
              <div class="form-group">
                <label>Segundo apellido</label>
                <input type="text" id="segundo_apellido" name="segundo_apellido" class="form-control">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" name="email" class="form-control">
              </div>

               <div class="form-group">
                <label>Novedad</label>
                <input type="text" id="novedad" class="form-control"  readonly="readonly">
              </div>

     <div class="form-group">
                <label>Motivo</label>
                <textarea type="text" id="motivo" name="motivo" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label>Respuesta</label>
                <textarea type="text" id="respuesta" name="respuesta" class="form-control"></textarea>
              </div>

               <div class="form-group">
                <label>Fecha inicio</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control">
              </div>
              <div class="form-group">
                <label>Fecha final</label>
                <input type="date" id="fecha_final" name="fecha_fin" class="form-control">
              </div>

              <div class="form-group">
                <label>Acta</label><strom style="color: red"> : Si este campo no se llena quedara el acta por defecto</strom>
                <input type="file" id="acta" name="acta" class="form-control" size="150" maxlength="150">
              </div>

              <div class="form-group">
                <label>Fecha inicio</label>
                <select name="tipo_respuesta" id="id_tipo_respuesta" class="form-control" >
                      <option value="1" id="tipo_respuesta">aprobado</option>
                      <option value="2" id="tipo_respuesta">No aprobada</option>
                      <option value="3" id="tipo_respuesta">En espera</option>
                 </select>
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
            var documento  = $('#'+id).children('td[data-target=documento]').text();
            var primer_nombre  = $('#'+id).children('td[data-target=primer_nombre]').text();
            var segundo_nombre  = $('#'+id).children('td[data-target=segundo_nombre]').text();
            var primer_apellido  = $('#'+id).children('td[data-target=primer_apellido]').text();
            var segundo_apellido  = $('#'+id).children('td[data-target=segundo_apellido]').text();
            var email  = $('#'+id).children('td[data-target=email]').text();
            var novedad  = $('#'+id).children('td[data-target=novedad]').text();
            var motivo  = $('#'+id).children('td[data-target=motivo]').text();
            var respuesta  = $('#'+id).children('td[data-target=respuesta]').text();
            var fecha_inicio  = $('#'+id).children('td[data-target=fecha_inicio]').text();
            var fecha_final  = $('#'+id).children('td[data-target=fecha_final]').text();
            var id_tipo_respuesta  = $('#'+id).children('td[data-target=id_tipo_respuesta]').text();



            $('#documento').val(documento);
            $('#primer_nombre').val(primer_nombre);
            $('#segundo_nombre').val(segundo_nombre);
            $('#primer_apellido').val(primer_apellido);
            $('#segundo_apellido').val(segundo_apellido);
            $('#novedad').val(novedad);
            $('#motivo').val(motivo);
            $('#respuesta').val(respuesta);
            $('#fecha_inicio').val(fecha_inicio);
            $('#fecha_final').val(fecha_final);
            $('#email').val(email);
            $('#id_tipo_respuesta').val(parseInt(id_tipo_respuesta));
            $('#myModal').modal('toggle');
          
      });

       
  });
</script></div></div>
<?php require RUTA_APP . '/views/inicio/footer.php'; ?>
