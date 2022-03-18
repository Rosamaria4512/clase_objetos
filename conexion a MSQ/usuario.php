<?php
require_once("CONEXION.PHP");


class Usuario extends Conexion {
    public function __construct()
    {
        $this->db = parent::__construct();
    }
public function insertarUsuario($nombre, $email ,$password){
    //prepare---->prepara la mconsulta SQL enviada ->insert into
    $tabla = $this->db->prepare("INSERT INTO usuario (nombre, email, password)
     VALUE (:nombre, :email, :password)");
    $tabla->bindParam(':nombre', $nombre);
    $tabla->bindParam(':email', $email);
    $tabla->bindParam(':password',$password);
    $tabla->execute();
    //para identificar el ultimo registro
    $idUsuario = $this->db->lastInsertId();
    return $idUsuario;
}
}





?>