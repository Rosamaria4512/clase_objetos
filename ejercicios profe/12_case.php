<?php 

    $nombre = "Andrea";
    $contrasena = 123456;

switch (true) {
    case $nombre == "Ana" && $contrasena == 123456:
        echo "Bienvenida " . $nombre . " al programa";
        break;
    case 'Carlos':
        echo "Bienvenido " . $nombre . " al programa";
        break;
    default:
        echo "Usuario no registrado ".$nombre;
        break;
    }
