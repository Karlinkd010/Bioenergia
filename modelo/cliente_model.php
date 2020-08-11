<?php
    
    class cliente_model{
        private $DB;
        private $Sucursal;
        private $Personas;
        private $Area;
        private $Departamento;
        private $Clientes;
        private $Empleados;
        private $Venta;
        private $User;


        function __construct(){
            $this->DB=cls_conexion::conectar();
        }
         /*---------LISTAR---------------*/
        function getSucursal(){
            $sql="SELECT * from tbl_sucursal";
            $fila=$this->DB->query($sql);
            $this->sucursal=$fila;
            return  $this->sucursal;

        }
        function getuser(){
            $sql="SELECT * from tbl_usuario";
            $fila=$this->DB->query($sql);
            $this->user=$fila;
            return  $this->user;

        }

        function getPersonas(){
            $sql='SELECT *from vw_personas';
            $fila=$this->DB->query($sql);
            $this->personas=$fila;
            return  $this->personas;
        }

        function getArea(){
            $sql='SELECT * from tbl_area';
            $fila=$this->DB->query($sql);
            $this->Area=$fila;
            return  $this->Area;
        }
        function getDepartamento(){
            $sql='SELECT * FROM wv_departamento';
            $fila=$this->DB->query($sql);
            $this->Departamento=$fila;
            return  $this->Departamento;
        }
        function getClientes(){
            $sql='SELECT * from vw_venta';
            $fila=$this->DB->query($sql);
            $this->Clientes=$fila;
            return  $this->Clientes;
        }

        function getEmpleados(){
            $sql='SELECT * from vw_venta_empleado';
            $fila=$this->DB->query($sql);
            $this->Empleados=$fila;
            return  $this->Empleados;
        }

        function getVenta(){
            $sql='SELECT * from tbl_area';
            $fila=$this->DB->query($sql);
            $this->Ventas=$fila;
            return  $this->Venta;
        }


    }
?>
 