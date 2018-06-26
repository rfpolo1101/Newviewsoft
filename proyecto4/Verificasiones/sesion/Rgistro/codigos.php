<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

function codigoazar($codigo) { 

    $azar = "1234567890abcdefghijklmnopqrstuvwxyz";

    for($i = 1; $i < 8; $i++) { 

        $codigo .= $azar{rand(0, 35)};



    } 
    

    return $codigo; 

} 
 
$codigo=codigoazar(rand(1,9));



?>

</body>
</html>