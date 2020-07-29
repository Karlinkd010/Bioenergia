<?php
class departamento{
  
    var $id;
    var $departamento;
    

    /* Constructor*/

    public function departamento(){

    }

    /* Gets*/

    public function getId(){
        return $this->id;
    }
    public function getDepartamento(){
        return $this->departamento;
    }
    

    /* Sets*/

    public function setId($valor){
        $this->id=$valor;
    }
    public function setDepartamento($valor){
        $this->departamento=$valor;
    }






}