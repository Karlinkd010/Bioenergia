<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema Control Bio_Gas</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
        <link href="css/simple-sidebar.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/sweetalert.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>

        

    </head>

    

    <body>

        <div class="d-flex " id="wrapper" >

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
            <div class="sidebar-heading ">Administrador</div>
                <div class="list-group list-group-flush barra-lateral " >

                    <a href="index.php?m=admin" class="list-group-item list-group-item-action bg-light"><span class="fa fa-home"></span> Inicio</a>
                    <a href="index.php?m=personas" class="list-group-item list-group-item-action bg-light"><span class="fa fa-user-plus"></span> Registro</a>
                    <a href="index.php?m=sucursal" class="list-group-item list-group-item-action bg-light"><span class="fa fa-male"></span> Administrador</a>
                    <a href="index.php?m=empleado" class="list-group-item list-group-item-action bg-light"><span class="fa fa-user"></span> Empleados</a>
                    <a href="index.php?m=cliente" class="list-group-item list-group-item-action bg-light"><span class="fa fa-users"></span> Clientes</a>
                    <a href="index.php?m=suministro" class="list-group-item list-group-item-action bg-light"><span class="fa fa-list"></span> Suministro</a>
                    <a href="index.php?m=venta" class="list-group-item list-group-item-action bg-light"><span class="fa fa-line-chart"></span> Ventas</a>
                    <a href="index.php?m=departamento" class="list-group-item list-group-item-action bg-light"><span class="fa fa-building-o"></span> Departamento</a>
                    <a href="index.php?m=area" class="list-group-item list-group-item-action bg-light"><span class="fa fa-th-large"></span> Area</a>
                    <a href="index.php?m=sucursal" class="list-group-item list-group-item-action bg-light"><span class="fa  fa-building"></span> Sucursal</a>
                    <a href="index.php?m=sucursal" class="list-group-item list-group-item-action bg-light"><span class="fa fa-cogs"></span> Herramientas</a>
                    <a href="index.php?m=sucursal" class="list-group-item list-group-item-action bg-light"><span class="fa fa-question-circle"></span> Acerca de</a>
    
                </div>
            </div>
            
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
                
                    <button class="btn btn-info" id="menu-toggle"><span class="fa fa-tasks"></span>

                    </button>
                    

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Opciones
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" id="btncerrar" href="#"><span class=" fa fa-arrow-left"></span>  Cerrar Sesion</a>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>