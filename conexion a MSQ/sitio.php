<?php
require_once("CONEXION.PHP");


class Sitio extends Conexion {
    public function __construct()
    {
        $this->db = parent::__construct();
    }
public function insertarSitio($municipio,$lugar,$nombre){
    
    $tabla = $this->db->prepare("INSERT INTO sitio (municipio, lugar, nombre)
    VALUE (:municipio, :lugar, :nombre)");
   $tabla->bindParam(':municipio', $municipio);
   $tabla->bindParam(':lugar', $lugar);
   $tabla->bindParam(':nombre',$nombre);
   $tabla->execute();
   //para identificar el ultimo registro
   $idSitio = $this->db->lastInsertId();
   return $idSitio;
}
public function getSitio(){
    $rows = Null;
    $tabla = $this->db->prepare("SELECT id, municipio,lugar,nombre FROM sitio");
    $tabla ->execute();
    while ($result = $tabla->fetch()) {
        $rows[] =$result;
    }
    return $rows;
    
    }
    public function editarSitio($id, $municipio, $lugar, $nombre){
        $tabla = $this->db->prepare("UPDATE sitio SET municipio = :municipio, lugar = :lugar, nombre = :nombre WHERE id= $id");
        $tabla->bindParam(':municipio', $municipio);
        $tabla->bindParam(':lugar', $lugar);
        $tabla->bindParam(':nombre',$nombre);
        $tabla->execute();
        return $tabla;
}
    public function eLiminarSitio($id){
        $tabla = $this->db->prepare("DELETE FROM Sitio WHERE id= :id");
        $tabla->bindParam(':id', $id);
        $tabla->execute();
        return $tabla;
    }
}
?>