<?php
require_once("CONEXION.PHP");


class Servicio extends Conexion {
    public function __construct()
    {
        $this->db = parent::__construct();
    }
public function insertarServicio($servicio, $precio, $sitioid){
    //prepare---->prepara la mconsulta SQL enviada ->insert into
    $tabla = $this->db->prepare("INSERT INTO servicio (servicio, precio, sitioid)
     VALUE (:servicio, :precio, :sitioid)");
    $tabla->bindParam(':servicio', $servicio);
    $tabla->bindParam(':precio', $precio);
    $tabla->bindParam(':sitioid', $sitioid);
    $tabla->execute();
    //para identificar el ultimo registro
    $idservicio = $this->db->lastInsertId();
    return $idservicio;
}
 public function getServicios(){
    $rows = Null;
    $tabla = $this->db->prepare("SELECT id,servicio,precio,sitioid password FROM servicio");
    $tabla ->execute();
    while ($result = $tabla->fetch()) {
        $rows[] =$result;
    }
    return $rows;
    
    }

public function editarServicio($id, $servicio, $precio, $sitioid){
    $tabla = $this->db->prepare("UPDATE usuario SET nombre = :nombre, email = :email, password = :password WHERE id= $id");

    $tabla->bindParam(':servicio', $servicio);
    $tabla->bindParam(':precio', $precio);    
    $tabla->bindParam(':sitioid', $sitioid);    

    $tabla->execute();
    return $tabla;
}
public function eLiminarServicio($id){
    $tabla = $this->db->prepare("DELETE FROM servicio WHERE id= :id");
    $tabla->bindParam(':id', $id);
    $tabla->execute();
    return $tabla;
    # code...

}
 


}