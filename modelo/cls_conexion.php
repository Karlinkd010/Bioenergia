<?php    
class cls_conexion{

    public function __CONSTRUCT(){

        die("no se pudo conectar");

    }
    public static function Conectar(){
        $conn=null;
        $dbName = 'bd_BioEnergia';
        $servidor = 'localhost'; 
        $usuario= 'user_bioenergia';
        $pass = 'bioenergia';

       
        
        try 
        {           
               $conn =  new PDO( "sqlsrv:Server=".$servidor.";DataBase=".$dbName,$usuario,$pass); 
              // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //$conn= new PDO("sqlsrv:server=DESKTOP-FAE6SU1;Database=qqq;ConnectionPooling=0", "taller", "udenar");
          
        } 
        catch (PDOException $e) {
                echo "no se pudo conectar, hay errores"; 
        }
      
        return $conn;

    }

    public function Desconectar(){

        $conn=null;

    }
}

?>
