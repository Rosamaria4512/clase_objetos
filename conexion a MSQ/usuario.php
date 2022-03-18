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
public function getUsuarios(){
    $rows = Null;
    $tabla = $this->db->prepare("SELECT id, nombre,email, password FROM usuario");
    $tabla ->execute();
    while ($result = $tabla->fetch()) {
        $rows[] =$result;
    }
    return $rows;
    
    }

public function editarUsuario($id, $nombre, $email, $password){
    $tabla = $this->db->prepare("UPDATE usuario SET nombre = :nombre, email = :email, password = :password WHERE id= $id");

    $tabla->bindParam(':nombre', $nombre);
    $tabla->bindParam(':email', $email);
    $tabla->bindParam(':password',$password);
    $tabla->execute();
    return $tabla;
}
public function eLiminarUsuario($id){
    $tabla = $this->db->prepare("DELETE FROM usuario WHERE id= :id");
    $tabla->bindParam(':id', $id);
    $tabla->execute();
    return $tabla;
    # code...

}



}

?>