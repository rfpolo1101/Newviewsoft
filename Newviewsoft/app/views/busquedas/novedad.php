<?php
$connection =	mysqli_connect('localhost' , 'root' ,'' ,'newviewsoft');

	//  query to update data 
	 
	$result  = mysqli_query($connection , "UPDATE primer_nombre='$primer_nombre' SET primer_nombre WHERE fk_documento='$id'");
	if($result){
		echo 'data updated';


}
?>