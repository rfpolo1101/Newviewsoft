<?php

//redireccionar una pagina
function redireccionar($pagina)
{
    header('location: ' . RUTA_URL . $paginas);

}
