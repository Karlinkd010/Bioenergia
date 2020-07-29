<?php 
    require_once('modelo/cliente_model.php');
    require_once('modelo/DAOsucursal.php');
    require_once('modelo/DAOpersona.php');
    require_once('modelo/DAOlogin.php');
    require_once('modelo/DAOarea.php');
    require_once('modelo/DAOdepartamento.php');

    class cliente_controller{

        private $model_e;
        private $model_p;
        private $model_s;
        private $model_a;
        private $model_d;
        private $model_l;
        private $sucursal;
        private $persona;
        private $area;
        private $depa;
        private $user;
        

        function __construct(){
            $this->model_e=new cliente_model();
            $this->model_s=new DAOsucursal();
            $this->model_p=new DAOpersona();
            $this->model_a=new DAOarea();
            $this->model_d=new DAOdepartamento();
            $this->model_l=new DAOlogin();
        }

        function index(){
            include_once('vista/index.php');

        }
        function Admin(){
            include_once('vista/header.php');
            include_once('vista/mdl_admin.php');
            include_once('vista/footer.php');
        }

        /* SUCURSAL*/

        function Sucursal(){
            $query =$this->model_e->getsucursal();
            include_once('vista/header.php');
            include_once('vista/mdl_sucur.php');
            include_once('vista/footer.php'); 
        }

        function regSucursal(){
            $this->sucursal =new sucursal();
            $this->sucursal->setDireccion($_REQUEST["d1"]);
            $this->sucursal->setCorreo($_REQUEST["d2"]);
            $this->sucursal->setTelefono($_REQUEST["d3"]);

            $this->model_s->agregar($this->sucursal);
        }
        function actSucursal(){
     
            $this->sucursal =new sucursal();
            $this->sucursal->setId($_REQUEST["d1"]);
            $this->sucursal->setDireccion($_REQUEST["d2"]);
            $this->sucursal->setCorreo($_REQUEST["d3"]);
            $this->sucursal->setTelefono($_REQUEST["d4"]);
        
            $this->model_s->actualizar($this->sucursal);
            
        }

        function eliSucursal(){
     
            $this->sucursal =new sucursal();
            $this->sucursal->setId($_REQUEST["d1"]);
    
            $this->model_s->eliminar($this->sucursal);
   
        }

        /* PERSONAS*/


        function Personas(){
            $query =$this->model_e->getpersonas();
            $query1 =$this->model_e->getsucursal();
            $query2 =$this->model_e->getsucursal();
            include_once('vista/header.php');
            include_once('vista/mdl_regis.php');
            include_once('vista/footer.php');
        }

        function regPersonas(){
            $this->persona =new persona();
            $this->sucursal =new sucursal();
            $this->persona->setvchNombreCompleto($_REQUEST["d1"]);
            $this->persona->setvchClave_electoral($_REQUEST["d2"]);
            $this->persona->setvchCorreo($_REQUEST["d3"]);
            $this->persona->setintTelefono($_REQUEST["d4"]);
            $this->persona->setvchRfc($_REQUEST["d5"]);
            $this->sucursal->setId($_REQUEST["d6"]);

            $this->model_p->agregar($this->persona,$this->sucursal);
        }
        function actPersonas(){
            $this->persona =new persona();
            $this->sucursal =new sucursal();
            $this->persona->setId_persona($_REQUEST["d0"]);
            $this->persona->setvchNombreCompleto($_REQUEST["d1"]);
            $this->persona->setvchClave_electoral($_REQUEST["d2"]);
            $this->persona->setvchCorreo($_REQUEST["d3"]);
            $this->persona->setintTelefono($_REQUEST["d4"]);
            $this->persona->setvchRfc($_REQUEST["d5"]);
            $this->sucursal->setId($_REQUEST["d6"]);

            $this->model_p->actualizar($this->persona,$this->sucursal);
        }

        /* Area*/

        function logeo(){
            $this->user =new usuario();
            $this->user->setUser($_REQUEST["d1"]);
            $this->user->setPass($_REQUEST["d2"]);

            $this->model_l->login($this->user);
        }


        function Area(){
            $query =$this->model_e->getArea();

            include_once('vista/header.php');
            include_once('vista/mdl_area.php');
            include_once('vista/footer.php');
        }
        function regArea(){
            $this->area =new area();
            $this->area->setArea($_REQUEST["d1"]);

            $this->model_a->agregar($this->area);
        }
        function actArea(){
     
            $this->area =new area();
            $this->area->setId($_REQUEST["d1"]);
            $this->area->setArea($_REQUEST["d2"]);
            
        
            $this->model_a->actualizar($this->area);
            
        }

        function eliArea(){
     
            $this->area =new area();
            $this->area->setId($_REQUEST["d1"]);

    
            $this->model_a->eliminar($this->area);
   
        }
        /* DEPARTAMENTO*/


        function Departamento(){
            $q1 =$this->model_e->getDepartamento();
            $q =$this->model_e->getArea();
            $query =$this->model_e->getArea();

            include_once('vista/header.php');
            include_once('vista/mdl_departamento.php');
            include_once('vista/footer.php');
        }
        function regDepartamento(){
            $this->depa=new departamento();
            $this->area=new area();
            $this->depa->setDepartamento($_REQUEST["d1"]);
            $this->area->setId($_REQUEST["d2"]);

            $this->model_d->agregar_($this->depa,$this->area);
        }
        function actDepartamento(){
     
            $this->area =new area();
            $this->area->setId($_REQUEST["d1"]);
            $this->area->setArea($_REQUEST["d2"]);
            
        
            $this->model_a->actualizar($this->area);
            
        }

        function eliDepartamento(){
     
            $this->area =new area();
            $this->area->setId($_REQUEST["d1"]);

    
            $this->model_a->eliminar($this->area);
   
        }




        function Cliente(){
            $query =$this->model_e->getClientes();

            include_once('vista/header.php');
            include_once('vista/mdl_cliente.php');
            include_once('vista/footer.php');
        }
        function Empleado(){
            $query =$this->model_e->getEmpleados();

            include_once('vista/header.php');
            include_once('vista/mdl_empleado.php');
            include_once('vista/footer.php');
        }

        public function auth(){
            $this->user=new usuario();
            $this->user->setUser($_REQUEST["d1"]);
            $this->user->setPass($_REQUEST["d2"]);
            
            $aut =$this->model_l->getUsuario($this->user);
            

        }
    }
        
?>