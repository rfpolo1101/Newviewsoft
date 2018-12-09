<?php require RUTA_APP . '/views/inicio/header.php'; ?><br><br>
  <div class="container">
    <div class="table-responsive">

      <?php if($datos["datos"] != null): ?>

<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="Consulta la usuarios">
</div>


<table class="table table-hover table-bordered results">
    		  <thead class="thead-active">
    		    <tr>
            <th class="bg-primary">Tipo Documento</th>
            <th class="bg-primary">Documento</th>
            <th class="bg-primary">Primer nombre</th>
            <th class="bg-primary">Segundo nombre</th>
            <th class="bg-primary">Primer apellido</th>
            <th class="bg-primary">Segundo apellido</th>
            <th class="bg-primary">Email</th>
            <th class="bg-primary">Cargo</th>
            <th class="bg-primary">Estado</th>
            <th class="bg-primary">Editar</th>
              </tr>
              <tr class="warning no-result">
        <td colspan="4"><i class="fa fa-warning"></i> No Existe</td>
         </tr>
    		  </thead>
          <tbody>
          

            <?php foreach($datos['datos'] as $datos1):

                    if($datos1->fk_tipo_rol != 1):
            ?>
            <tr class="active"  id="<?php echo $datos1->documento; ?>">
            <td data-target="tipo_documento"><?php echo $datos1->tipo_documento?></td>
              <td class="active" data-target="documento"  scope="row"><?php echo $datos1->documento ?></td>
              <td data-target="primer_nombre"><?php echo $datos1->primer_nombre?></td>
              <td data-target="segundo_nombre"><?php echo $datos1->segundo_nombre ?></td>
              <td data-target="primer_apellido"><?php echo $datos1->primer_apellido ?></td>
              <td data-target="segundo_apellido" ><?php echo $datos1->segundo_apellido ?></td>
              <td data-target="email"><?php echo $datos1->correo?></td>
              <td data-target="tipo_rol"><?php echo $datos1->tipo_rol?></td>
              <td data-target="estado"><?php echo $datos1->estado ?></td>                                      
              <td><a href="#" data-role="update" data-id="<?php echo $datos1->documento ?>" id="up-el"><img src="<?php echo RUTA_URL?>/img/editar.png" style="width:30px;" ></a></td>
              <td data-target="id_tipo_respuesta" hidden> <?php echo $datos1->id_tipo_respuesta ?></td>
              <td data-target="id_estado" hidden> <?php echo $datos1->id_estado ?></td>
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
          <form method="post" action="<?php echo RUTA_URL  ?>/buscar/usuarios" enctype="multipart/form-data">
          <div class="modal-body">
          <div class="form-group">
                <label>Documento</label>
                <input type="text" id="documento" class="form-control"  readonly="readonly"  name="documento"  >
              </div>
              <div class="form-group">
                <label>Primer Nombre</label>
                <input type="text" id="primer_nombre" name="primer_nombre"   readonly="readonly"  class="form-control" >
              </div>
              <div class="form-group">
                <label>Segundo Nombre</label>
                <input type="text" id="segundo_nombre" name="segundo_nombre"  readonly="readonly"  class="form-control"  >
              </div>

               <div class="form-group">
                <label>Primer Apellido</label>
                <input type="text" id="primer_apellido" name="primer_apellido"  readonly="readonly"    class="form-control">
              </div>
                <input type="hidden" id="userId" class="form-control">

                <div class="form-group">
                <label>Segundo Apellido</label>
                <input type="text" id="segundo_apellido"  readonly="readonly"  name="segundo_apellido"  class="form-control">
              </div>
                <input type="hidden" id="userId" class="form-control">

              <div class="form-group">
                <label>Email</label>
                <input type="text" id="email" name="email"   readonly="readonly"   class="form-control">
              </div>

              <div class="form-group">
                <label>Cargo</label>
                <input type="text" id="tipo_rol"  readonly="readonly"  class="form-control">
              </div>

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
    

    <script>
  $(document).ready(function(){

    //  append values in input fields
      $(document).on('click','a[data-role=update]',function(){
        
            var id  = $(this).data('id');
            var tipo_documento = $('#' +id).children('td[data-target=tipo_documento]').text();
            var documento  = $('#'+id).children('td[data-target=documento]').text();
            var primer_nombre  = $('#'+id).children('td[data-target=primer_nombre]').text();
            var segundo_nombre  = $('#'+id).children('td[data-target=segundo_nombre]').text();
            var primer_apellido  = $('#'+id).children('td[data-target=primer_apellido]').text();
            var segundo_apellido  = $('#'+id).children('td[data-target=segundo_apellido]').text();
            var email  = $('#'+id).children('td[data-target=email]').text();
            var tipo_rol  = $('#'+id).children('td[data-target=tipo_rol]').text();
            var id_estado  = $('#'+id).children('td[data-target=id_estado]').text();






            

            $('#tipo_documento').val(tipo_documento);
            $('#documento').val(documento);
            $('#primer_nombre').val(primer_nombre);
            $('#segundo_nombre').val(segundo_nombre);
            $('#primer_apellido').val(primer_apellido);
            $('#segundo_apellido').val(segundo_apellido);
            $('#email').val(email);
            $('#tipo_rol').val(tipo_rol);
            $('#id_estado').val(parseInt(id_estado));




            $('#myModal').modal('toggle');
          
      });   
  });
</script></div></div>
<?php require RUTA_APP . '/views/inicio/footer.php'; ?>
