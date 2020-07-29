<?php
    require_once('modelo/cls_conexion.php');
    require_once('controlador/cliente_controller.php');

    $controller= new cliente_controller();
    session_start();
    
    if(!empty($_REQUEST['m'])){
        $metodo=$_REQUEST['m'];
        if (method_exists($controller, $metodo)) {
            $controller->$metodo();
        }else{
            $controller->index();
        }
    }else{
        $controller->index();
        
    }

?>

