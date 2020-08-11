<?php
include_once('cls_conexion.php');
require_once('acceso/persona.php');
require_once('acceso/usuario.php');

class DAOlogin{
    private $DB;

    function __construct(){
        $this->DB=cls_conexion::conectar();
    }

    public function agregar($object){
        
        $d2=$object->getUser();
        $d3=$object->getPass();
        $d4=$object->getPalabra();
        $d5=$object->getEstado();
        $d6=$object->getRol();
        $id_s=$object->getId_persona();

       $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $sql="INSERT into tbl_usuario values (?,(SELECT dbo.encriptar_pass(?)),?,?,?,null,getdate(),?)";

       $query = $this->DB->prepare($sql);

       $query->execute([$d2,$d3,$d4,$d5,$d6,$id_s]);
       if($query){
        echo 1;
    }
    }

    public function getUsuario($object){
        
        $d2=$object->getUser();


       $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $sql="SELECT *FROM tbl_usuario 
       WHERE vchUser=?";

       $query = $this->DB->prepare($sql);

       $query->execute([$d2]);

       return ($query->rowCount() ? $query->fetchAll(): false);
    }

    public function actualizar($object,$object2){
        $d1=$object->getId();
        $d2=$object->getUser();
        $d3=$object->getPass();
        $d4=$object->getPalabra();
        $d5=$object->getEstado();
        $d6=$object->getRol();
        $d7=$object->getCodigo();
        $d8=$object->getFecha();
        $id_p=$object2->getId();    
        

       $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $sql="UPDATE tbl_usuario
       SET vchUser = ?,
          ,vchPass= ?,
          ,vchSecret =? ,
          ,intEstado= ?,
          ,vchRoll = ?,
          ,vchCode = ?,
          ,dtDate = ?,
          ,id_perso =? ,
     WHERE id_usuario=?";

       $query = $this->DB->prepare($sql);

       $query->execute([$d2,$d3,$d4,$d5,$d6,$d7,$d8,$id_p,$d1]);
       if($query){
        echo 1;
    }
    }
    function eliminar($object){
        $id_p=$object->getId();
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql1="DELETE FROM tbl_usuario where id_usuario=?";
        
        $q=$this->DB->prepare($sql1);
        $q->execute([$id_p]);
        if($q){
            echo 1;
        }
    }
    function login($object){
        $user=$object->getUser();
        $pass=$object->getPass();
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql1="SELECT *FROM tbl_usuario 
        WHERE vchUser=? and vchPass=
        (select dbo.encriptar_pass(?)) and intEstado =1 ";
        
        $q=$this->DB->prepare($sql1);
        $q->execute([$user,$pass]);

        if($q->rowCount()==0){
            echo 0;
        }else{echo 1;}
    
    }
    function getUser_correo($object,$object1){
        $correo=$object->getvchCorreo();
        $user=$object1->getUser();
        $pregunta=$object1->getPalabra();
        
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql1="SELECT *FROM recovery WHERE vchUser=?  and vchCorreo=? and vchSecret=? and intEstado =1";
        
        $q=$this->DB->prepare($sql1);
        $q->execute([$user,$correo,$pregunta]);

        if($q->rowCount()==0){
            echo 0;
        }else{
            $_SESSION["user"] = $user;
            $_SESSION["correo"] =$correo;
            echo 1;}
    
    }

    function recovery_pass($object1){
        
        $user=$object1->getUser();
        $new_pass=$object1->getPass();
        
        $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql1="UPDATE tbl_usuario set vchPass=(select dbo.encriptar_pass(?)) where vchUser=?";
        
        $q=$this->DB->prepare($sql1);
        $q->execute([$new_pass,$user]);

        if($q->rowCount()==0){
            echo 0;
        }else{
            session_destroy();
            
            echo 1;}
    
    }
}
