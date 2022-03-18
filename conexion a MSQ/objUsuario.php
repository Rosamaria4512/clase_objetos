<?php
require_once("usuario.php");

$objUsuario = new Usuario();
$insertarUsuario = $objUsuario->insertarUsuario( "laura", "marcelo@misena.edu.co", 123456);
echo $insertarUsuario;

?>