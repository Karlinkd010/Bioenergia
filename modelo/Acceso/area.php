<?php
class area{
  
    var $id;
    var $area;
    

    /* Constructor*/

    public function area(){

    }

    /* Gets*/

    public function getId(){
        return $this->id;
    }
    public function getArea(){
        return $this->area;
    }
    

    /* Sets*/

    public function setId($valor){
        $this->id=$valor;
    }
    public function setArea($valor){
        $this->area=$valor;
    }






}