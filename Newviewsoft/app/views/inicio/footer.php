
  
  
  <!--BOOTSTRAP JQUERY-->
  <script type="text/javascript" src="<?php echo RUTA_URL; ?>/bootstrap/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo RUTA_URL; ?>/bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo RUTA_URL; ?>/js/reloj.js"></script>

    </div>
    <script>
      $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
          $(this).next('ul').toggle();
          e.stopPropagation();
          e.preventDefault();
        });
      });
    </script>


</body>
</html>