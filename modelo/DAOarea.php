<?php
include_once('cls_conexion.php');
require_once('acceso/area.php');

class DAOarea{
    private $DB;

    function __construct(){
        $this->DB=cls_conexion::conectar();
    }

    public function agregar($objeto){
        $area=$objeto->getArea();

       $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="INSERT INTO tbl_area(vchNombre) VALUES (?)";
       $query = $this->DB->prepare($sql);
       $query->execute([$area]);
       if($query){
           echo 1;
           
           
        }
            
    }

    public function actualizar($objeto){
        $id=$objeto->getId();
        $area=$objeto->getArea();
        
       $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="UPDATE tbl_area set vchNombre=? WHERE  id_area= ?";
       $query = $this->DB->prepare($sql);
       $query->execute([$area,$id]);
       if($query){
           echo 1;
           
        }
    }
    public function eliminar($objeto){

        $id=$objeto->getId();
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="DELETE FROM tbl_area WHERE id_area=?";
        
        $q=$this->DB->prepare($sql);
        $q->execute([$id]);
        if($q){
            echo 1;
            
         }
        

        
        
    }

}
