<?php
require_once("usuario.php");

$objUsuario = new Usuario();
//INSERTAR USUARIOS:
//$insertarUsuario = $objUsuario->insertarUsuario( "laura", "marcelo@misena.edu.co", 123456);
//echo $insertarUsuario;


//modificar usuarios:
    //$editarusuario = $objUsuario->editarUsuario(4, "valentina ledezma", "vale123@gamil.com", 234423);


//ELIMINAR DATOS:
  $eLiminarUsuario =$objUsuario->eLiminarUsuario(4);





//ver la lista de usuarios
$verUsuarios = $objUsuario->getUsuarios();


print_r('<pre>');
print_r($verUsuarios);
print_r('</pre>');


?>