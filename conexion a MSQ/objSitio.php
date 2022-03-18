<?php
require_once("sitio.php");

$objSitio = new Sitio();
//INSERTAR USUARIOS:
/*$insertarSitio = $objSitio->insertarSitio( "popayan","los tendidos","finca de los osos");
echo $insertarSitio;*/
//$editarSitio = $objSitio->editarSitio(2, "balboa", "las ramas", "las llantas");

$eLiminarSitio =$objSitio->eLiminarSitio(2);






$verSitio = $objSitio->getSitio();


print_r('<pre>');
print_r($verSitio);
print_r('</pre>');


?>