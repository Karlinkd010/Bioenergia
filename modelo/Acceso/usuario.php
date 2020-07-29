<?php
class usuario{
  
    
    var $id;
    var $user;
    var $pass;
    var $palabra;
    var $estado;
    var $rol;
    var $codigo;
    var $fecha;
    

    

    /* Constructor*/

    public function usuario(){

    }

    /* Gets*/
    public function getId(){
        return $this->id;
    }
    public function getUser(){
        return $this->user;
    }

    public function getPass(){
        return $this->pass;
    }
    public function getPalabra(){
        return $this->palabra;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function getRol(){
        return $this->rol;
    }
    public function getCOdigo(){
        return $this->codigo;
    }
    public function getFecha(){
        return $this->fecha;
    }
  

    /* Sets*/
    public function setId($valor){
        $this->id=$valor;
    }
    public function setUser($valor){
        $this->user=$valor;
    }
    public function setPass($valor){
        $this->pass=$valor;
    }
    public function setPalabra($valor){
        $this->palabra=$valor;
    }
    public function setEstado($valor){
        $this->estado=$valor;
    }
    public function setRol($valor){
        $this->rol=$valor;
    }
    public function setCOdigo($valor){
        $this->codigo=$valor;
    }
    public function setFecha($valor){
        $this->fecha=$valor;
    }
  
   
}