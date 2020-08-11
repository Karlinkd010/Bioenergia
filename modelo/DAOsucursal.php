<?php
include_once('cls_conexion.php');
require_once('acceso/sucursal.php');

class DAOsucursal{
    private $DB;
    function __construct(){
        $this->DB=cls_conexion::conectar();
    }

    public function agregar($obj_sucursal){
        $id=$obj_sucursal->getId();
        $direccion=$obj_sucursal->getDireccion();
        $correo=$obj_sucursal->getCorreo();
        $telefono=$obj_sucursal->getTelefono();

       $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="INSERT INTO tbl_sucursal(vchDireccion,vchCorreo,intTelefono) VALUES (?,?,?)";
       $query = $this->DB->prepare($sql);
       $query->execute([$direccion, $correo,$telefono]);
       if($query){
           echo 1;          
        }          
    }
    public function actualizar($obj_sucursal){
        $id=$obj_sucursal->getId();
        $direccion=$obj_sucursal->getDireccion();
        $correo=$obj_sucursal->getCorreo();
        $telefono=$obj_sucursal->getTelefono();
       $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql="UPDATE tbl_sucursal set vchDireccion=?,vchCorreo=?, intTelefono=? WHERE  id_sucursal= ?";
       $query = $this->DB->prepare($sql);
       $query->execute([$direccion, $correo,$telefono,$id]);
       if($query){
           echo 1;
      
        }
    }

    
    public function eliminar($obj_sucursal){

        $id=$obj_sucursal->getId();
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="DELETE FROM tbl_sucursal WHERE id_sucursal=?";
        
        $q=$this->DB->prepare($sql);
        $q->execute([$id]);
        if($q){
            echo 1;
            
         }
        

        
        
    }

}

