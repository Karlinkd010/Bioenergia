<?php
class sucursal{
  
    var $id,$direccion,$correo,$telefono;

    /* Constructor*/
    public function sucursal(){

    }
    /* Gets*/

    public function getId(){
        return $this->id;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function getTelefono(){
        return $this->telefono;
    }

    /* Sets*/

    public function setId($valor){
        $this->id=$valor;
    }
    public function setDireccion($valor){
        $this->direccion=$valor;
    }
    public function setCorreo($valor){
        $this->correo=$valor;
    }
    public function setTelefono($valor){
        $this->telefono=$valor;
    }






}