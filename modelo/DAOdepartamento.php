<?php
include_once('cls_conexion.php');
require_once('acceso/departamento.php');
require_once('acceso/area.php');

class DAOdepartamento{
    private $DB;

    function __construct(){
        $this->DB=cls_conexion::conectar();
    }

    public function agregar_($obj,$obj2){
        
        $departamento=$obj->getDepartamento();
        $area=$obj2->getId();

        

       $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="INSERT INTO tbl_departamento(vchNombre,id_area) VALUES (?,?)";
       $query = $this->DB->prepare($sql);
       $query->execute([$departamento,$area]);
       if($query){
           echo 1;
           
           
        }
            
    }

    public function actualizar($obj,$obj2){
        $id=$obj->getId();
        $departamento=$obj->getDepartamento();
        $area=$obj2->getId();
       $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="UPDATE tbl_departamento set vchNombre=?,id_area=? WHERE  id_departamento= ?";
       $query = $this->DB->prepare($sql);
       $query->execute([$departamento, $area,$id]);
       if($query){
           echo 1;
           
        }
    }
    public function eliminar($obj){

        $id=$obj->getId();
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="DELETE FROM tbl_departamento WHERE id_departamento=?";
        
        $q=$this->DB->prepare($sql);
        $q->execute([$id]);
        if($q){
            echo 1;
            
         }
        

        
        
    }

}
