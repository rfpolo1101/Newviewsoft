<?php require RUTA_APP . '/views/inicio/header.php'; ?><br><br>
<div class="container">
  <div>

  <?php if($datos["datos"] != null): ?>
		<table class="table table-bordered  table-striped "  class="tablas1">
		  <thead class="thead-active">
		    <tr>
          <th class="bg-primary">Documento</th>
          <th class="bg-primary">Primer nombre</th>
          <th class="bg-primary">Segundo nombre</th>
          <th class="bg-primary">Primer apellido</th>
          <th class="bg-primary">Segundo apellido</th>
          <th class="bg-primary">Email</th>
          <th class="bg-primary">Novedad</th>
          <?php if($datos["xd"] == 4){echo "<th>fallas</th>";} ?>
          <th class="bg-primary">Motivo</th>
          <th class="bg-primary">Respuesta</th>
          <th class="bg-primary">Fecha inicial</th>
          <th class="bg-primary">Fecha final</th>
          <th class="bg-primary">Editar</th>
          <th class="bg-primary">Eliminar</th>
          </tr>
		  </thead>
        <?php foreach($datos['datos'] as $datos1):

                if($datos1->id_tipo_novedad == $datos["xd"] ):
        ?>
        <tr class="active"  id="<?php echo $datos1->id_novedad; ?>">
        
          <td class="active" data-target="documento"><?php echo substr($datos1->documento, 2) ?></td>
          <td data-target="primer_nombre"><?php echo $datos1->primer_nombre?></td>
          <td data-target="segundo_nombre"><?php echo $datos1->segundo_nombre ?></td>
          <td data-target="primer_apellido"><?php echo $datos1->primer_apellido ?></td>
          <td data-target="segundo_apellido" ><?php echo $datos1->segundo_apellido ?></td>
          <td data-target="email"><?php echo $datos1->correo?></td>
          <td data-target="novedad"><?php echo $datos1->tipo_novedad ?></td>
          <?php if($datos["xd"] == 4){echo "<td data-target='fallas'>$datos1->fallas</td>";} ?>
          <td data-target="motivo"><?php echo $datos1->motivo?></td>
          <td data-target="respuesta"><?php echo $datos1->respuesta ?></td>
          <td data-target="fecha_inicio"><?php echo $datos1->fecha_inicio ?></td>
          <td data-target="fecha_final"><?php echo $datos1->fecha_fin ?></td>
          <td><a href="#" data-role="update" data-id="<?php echo $datos1->id_novedad?>" id="up-el">editar</a></td>
          <td><a href="#" data-role="" data-id="<?php echo $datos1->id_novedad?>" id="up-el">eliminar</a></td>
          
        </tr>
                <?php endif; endforeach; ?>
   
         
                </tr>
		  </tbody>
		</table>
	</div>
    
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
          <div class="modal-body">
          <div class="form-group">
                <label>Documento</label>
                <input type="text" id="documento" class="form-control" disabled>
              </div>
              <div class="form-group">
                <label>Primer nombre</label>
                <input type="text" id="primer_nombre" class="form-control">
              </div>

               <div class="form-group">
                <label>Segundo nombre</label>
                <input type="text" id="segundo_nombre" class="form-control">
              </div>
                <input type="hidden" id="userId" class="form-control">

                     <div class="form-group">
                <label>Primer_apellido</label>
                <input type="text" id="primer_apellido" class="form-control">
              </div>
              <div class="form-group">
                <label>Segundo apellido</label>
                <input type="text" id="segundo_apellido" class="form-control">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" class="form-control">
              </div>

               <div class="form-group">
                <label>Novedad</label>
                <input type="text" id="novedad" class="form-control">
              </div>

     <div class="form-group">
                <label>Motivo</label>
                <textarea type="text" id="motivo" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label>Respuesta</label>
                <textarea type="text" id="respuesta" class="form-control"></textarea>
              </div>

               <div class="form-group">
                <label>fecha inicio</label>
                <input type="text" id="fecha_inicio" class="form-control">
              </div>

              <div class="form-group">
                <label>fecha final</label>
                <input type="text" id="fecha_final" class="form-control">
              </div>
                <input type="hidden" id="userId" class="form-control">

                



              

              
              


          </div>
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
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
            $('#myModal').modal('toggle');
      });

           // now create event to get data from fields and update in database 

       $('#save').click(function(){
         
          var primer_nombre =  $('#primer_nombre').val();
           var segundo_nombre =  $('#segundo_nombre').val();
           var primer_apellido =  $('#primer_apellido').val();
           var segundo_apellido =  $('#segundo_apellido').val();
           var novedad =  $('#novedad').val();
           var motivo =  $('#motivo').val();
           var respuesta =  $('#respuesta').val();
           var fecha_inicio =  $('#fecha_inicio').val();
           var fecha_final =  $('#fecha_final').val();
           var email =  $('#email').val();

          $.ajax({
              url      : 'novedad.php',
              method   : 'post', 
              data     : {primer_nombre: primer_nombre , segundo_nombre : segundo_nombre ,
               primer_apellido: primer_apellido, segundo_apellido : segundo_apellido, email: email, novedad : novedad, respuesta : respuesta, fecha_inicio : fecha_inicio, fecha_final : fecha_final   },
              success  : function(response){
                            // now update user record in table 
                      $('#'+id).children('td[data-target=primer_nombre]').text(primer_nombre);
                      $('#'+id).children('td[data-target=segundo_nombre]').text(segundo_nombre);
                      $('#'+id).children('td[data-target=primer_apellido]').text(primer_apellido);
                      $('#'+id).children('td[data-target=segundo_apellido]').text(segundo_apellido);
                      $('#'+id).children('td[data-target=email]').text(email);
                      $('#'+id).children('td[data-target=novedad]').text(novedad);
                      $('#'+id).children('td[data-target=motivo]').text(motivo);
                      $('#'+id).children('td[data-target=respuesta]').text(respuesta);
                      $('#'+id).children('td[data-target=fecha_inicio]').text(fecha_inicio);
                      $('#'+id).children('td[data-target=fecha_final]').text(fecha_final); 

                         }
          });
       });
  });
</script>
<?php require RUTA_APP . '/views/inicio/footer.php'; ?>
