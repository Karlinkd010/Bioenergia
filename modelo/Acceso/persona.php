<?php
class persona{
    var $id_persona;
    var $vchNombreCompleto;
    var $vchClave_electoral;
    var $vchCorreo;
    var $intTelefono;
    var $vchRfc;

    /* Constructor*/

    public function persona(){

    }
    public function getId_persona(){
        return $this->id_persona;
    }
    public function getvchNombreCompleto(){
        return $this->vchNombreCompleto;
    }
    public function getvchClave_electoral(){
        return $this->vchClave_electoral;
    }
    public function getvchCorreo(){
        return $this->vchCorreo;
    }
    public function getintTelefono(){
        return $this->intTelefono;
    }
    public function getvchRfc(){
        return $this->vchRfc;
    }


    public function setId_persona($valor){
         $this->id_persona=$valor;
    }
    public function setvchNombreCompleto($valor){
        $this->vchNombreCompleto=$valor;
    }
    public function setvchClave_electoral($valor){
        $this->vchClave_electoral=$valor;
    }
    public function setvchCorreo($valor){
        $this->vchCorreo=$valor;
    }
    public function setintTelefono($valor){
        $this->intTelefono=$valor;
    }
    public function setvchRfc($valor){
        $this->vchRfc=$valor;
    }
    


    



}

