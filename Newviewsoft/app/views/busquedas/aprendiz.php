<?php require RUTA_APP . '/views/inicio/header.php'; ?><br><br>
<div class="container">
    <div class="table-responsive">

  <?php if($datos["datos"] != null): ?>
  <table class="table table-bordered"  class="tablas1">
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
          if($datos->tipo_rol === "Aprendiz"):?>

        <tr class="bg-primary">
          <td><?php echo $datos->tipo_documento ?></td>
          <td><?php echo substr($datos->documento, 2) ?></td>
          <td><?php echo $datos->primer_nombre . " " . $datos->segundo_nombre?></td>
          <td><?php echo $datos->primer_apellido . " " . $datos->segundo_apellido?></td>
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
                <select name="ficha" id="ficha" class="form-control" >
                      <option value="0">Reintegro</option>
                      <option value="0">Cambio jornada</option>
                      <option value="0">Retiro voluntario</option>
                      <option value="0">Aplazamiento</option>
                      <option value="0">Desercion</option>
                      <option value="0">Traslado</option>
                      <option value="0">Reintegro</option>  
                      </select>
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
        

             var = documento = $('#documento').val(documento);
             var = primer_nombre =  $('#primer_nombre').val(primer_nombre);
             var = segundo_nombre =   $('#segundo_nombre').val(segundo_nombre);
             var = primer_apellido =  $('#primer_apellido').val(primer_apellido);
             var = segundo_apellido =  $('#segundo_apellido').val(segundo_apellido);
             var = novedad =  $('#novedad').val(novedad);
             var = motivo =  $('#motivo').val(motivo);
             var = respuesta =   $('#respuesta').val(respuesta);
             var = fecha_inicio =  $('#fecha_inicio').val(fecha_inicio);
             var = fecha_final =   $('#fecha_final').val(fecha_final);
             var = email =   $('#email').val(email);

          $.ajax({
              url      :  "",
              method   : 'post', 
              data     : {},
              success  : function(response){
                            // now update user record in table 
  
                              $('#'+id).children('td[data-target=documento]').text(documento);
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
                              $('#myModal').modal('toggle');

                         }
          });
       });
  });
</script>
<?php require RUTA_APP . '/views/inicio/footer.php'; ?>
