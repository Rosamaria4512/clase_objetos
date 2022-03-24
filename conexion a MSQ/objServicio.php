<?php
require_once("servicio.php");

$objservicio = new Servicio();
//INSERTAR USUARIOS:
$insertarservicio = $objservicio->insertarservicio("piscina", 15000, 3);
echo $insertarservicio;


//modificar usuarios:
    //$editarservicio = $objUsuario->editarUsuario(4, "valentina ledezma", "vale123@gamil.com", 234423);


//ELIMINAR DATOS:
 // $eLiminarUsuario =$objUsuario->eLiminarUsuario(4);





//ver la lista de usuarios
/* $verservicio = $objservicio->getServicios();


print_r('<pre>');
print_r($verservicio);
print_r('</pre>');
 */

?>