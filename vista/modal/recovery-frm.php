




<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Recovery Password
        
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="vendor/bootstrap/css/login.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href="vendor/bootstrap/css/sweetalert.css" rel="stylesheet">

</head>

<body>

    <div class="wrapper">
        <div id="formContent">
            <!-- Tabs Titles -->

            <div>
                <h4>
                    <b>Reestablece</b> la contraseña
                </h4>
            </div>

            <!-- Icon -->
            <div>
                <img src="http://cdn.onlinewebfonts.com/svg/img_398183.svg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="POST" >
                <input type="text" id="txtCorreo"  readonly value="<?php echo $_SESSION["correo"]; ?>" >        
                <input type="text" id="txtUser" readonly value="<?php echo $_SESSION["user"]; ?>" >
                <input type="password" id="txtContrasena" name="txtContrasena" placeholder="Nueva Contraseña" >
                <input type="password" id="txtRepetirContrasena" name="txtRepetirContrasena" placeholder="Repetir Contraseña">
                
                <div class="loginButton">
                    <input id="btnGuardar" name="btnGuardar" type="submit" value="Cambiar Contraseña" onclick="return comparePassword();">
                </div>
                
            </form>

            <!-- Remind Passowrd -->
  

        </div>
    </div>

    <script>

        
        
        

         function comparePassword(){
                var correo = document.getElementById('txtCorreo').value;
                var user= document.getElementById('txtUser').value;
    
                var contrasena = document.getElementById('txtContrasena').value;
                var repetirContrasena = document.getElementById('txtRepetirContrasena').value;

                if(contrasena != repetirContrasena){
                    swal('Error', "La contrasela no coinciden" , 'warning');
                    return false;
                }else{
                    $.ajax({
                url: 'index.php?m=recovery_pass_controll',
                type: 'POST',
                data: {
                    'd1': user,
                    'd2': contrasena,
                    
                },
                 success: function(response){  
                     
                     if(response==0){
                         swal('Error', "Lo sentimos hubo un error en el servidor" , 'warning');
                         location.href='index.php?m=recovery_password';
                        }else if(response==1){
                           
                            swal('Correcto', "Contraseña restablecido" , 'success');

                            alert("Contraseña restablacido");
                         
                            location.href='index.php?m=index';
                                                
                        }
                    }
                });
                    return true;
                }

            }
     

    </script>


<script src="vendor/jquery/jquery.min.js"></script>
  
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootstrap/js/sweetalert.min.js"></script>

  


</body>

</html>

