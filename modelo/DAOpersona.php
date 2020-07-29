<?php
include_once('cls_conexion.php');
require_once('acceso/persona.php');
require_once('acceso/sucursal.php');

class DAOpersona{
    private $DB;

    function __construct(){
        $this->DB=cls_conexion::conectar();
    }

    public function agregar($object,$object2){
        
        $d2=$object->getvchNombreCompleto();
        $d3=$object->getvchClave_electoral();
        $d4=$object->getvchCorreo();
        $d5=$object->getintTelefono();
        $d6=$object->getvchRfc();
        $id_s=$object2->getId();

        
        

       $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $sql="INSERT INTO tbl_persona(vchNombreCompleto,vchClave_electoral,vchCorreo,intTelefono,vchRfc,id_sucursal1) VALUES (?,?,?,?,?,?)";

       $query = $this->DB->prepare($sql);

       $query->execute([$d2,$d3,$d4,$d5,$d6,$id_s]);
       if($query){
        echo 1;
        
        
     }
    }

    public function actualizar($object,$object2){
        $id_p=$object->getId_persona();
        $d2=$object->getvchNombreCompleto();
        $d3=$object->getvchClave_electoral();
        $d4=$object->getvchCorreo();
        $d5=$object->getintTelefono();
        $d6=$object->getvchRfc();
        $id_s=$object2->getId();
        

       $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $sql="UPDATE tbl_persona set vchNombreCompleto=?,vchClave_electoral=?, vchCorreo=?, intTelefono=?, vchRfc=?,id_sucursal1=? WHERE  id_persona= ?";

       $query = $this->DB->prepare($sql);

       $query->execute([$d2,$d3,$d4,$d5,$d6,$id_s,$id_p]);
       if($query){
        echo 1;
    }
    }
    function eliminar($object){
        $id_p=$object->getId_persona();
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql1="DELETE FROM tbl_persona where id_persona=?";
        
        $q=$this->DB->prepare($sql1);
        $q->execute([$id_p]);
        if($q){
            echo 1;
        }
    }
    
}

