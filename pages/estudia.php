<?php 
require_once("conexion.php");
?> 
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap-datepicker.min.css">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" 
                                    placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="estudiantes.html">
                                <i class="fa fa-th-list fa-fw"></i> Estudiantes</a>
                        </li>
                        <li>
                            <a href="docentes.html">
                                <i class="fa fa-group fa-fw"></i> Docentes</a>
                        </li>
                        <li>
                            <a href="asignaturas.html">
                                <i class="fa fa-edit fa-fw"></i> Asignaturas</a>
                        </li>
                        <li>
                            <a href="horario.html">
                                <i class="fa fa-table fa-fw"></i> Horario</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gears fa-fw"></i>
                                Configuración<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Administrar Usuarios</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de Estudiantes</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Lista de estudiantes del Diplomado en Desarrollo Web
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div>
                                <button type="button" class="btn btn-primary" 
                                data-toggle="modal" data-target="#modalEstudiante">
                                    <i class="fa fa-file-o"></i>
                                    Nuevo
                                </button>  
                                <button type="button" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                    Borrar
                                </button>
                                
                                <button type="button" class="btn btn-success" 
                                data-toggle="modal" 
                                data-target="#modalListaEstudiantes" 
                                onclick="recorrerLista()">
                                    <i class="fa fa-external-link"></i>
                                    Mostrar Lista
                                </button>
                                <br/><br/>
                            </div>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-estudiantes">
                                <thead>
                                    <tr>
                                        <th class="center">
                                            <input type="checkbox"  
                                                onClick="seleccionarTodo(this)"/>
                                        </th>
                                        <th width="10">Nro.</th>
                                        <th>DNI</th>
                                        <th>Apellidos y Nombres</th>
                                        <th>Género</th>
                                        <th>Email</th>
                                        <th>Teléfo</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody> 

            <?php 
            $consulta='Select e.*, ( Case e.genero When "M" Then "Masculino" Else "Femenino" End) As genero_desc FROM `estudiant` e ORDER BY e.`paterno` ASC';
              
            $resultado = $conn->query($consulta);
              if($resultado->num_rows > 0) {
                  $i = 1;   
                while($row = $resultado->fetch_assoc()) 
                
                    {     ?>     
                    <tr class="">   
                    <td class="center"> <input type="checkbox" name="fila"/>       </td>       
                    <td class="center"> <?php echo $i; ?> </td>       
                    <td><?php echo $row['DNI'];?></td>       
                    <td><?php echo mb_convert_encoding($row['paterno'].' '.$row['materno'].' '.$row['nombres'], 'UTF-8', 'ISO-8859-1');?></td>       
                    <td><?php echo $row['genero_desc']; ?></td> 
                    <td class="center"><?php echo $row['email'];?></td>       
                    <td class="center"><?php echo $row['telefono'];?>        </td>       
                    <td class="center"><?php echo $row['fechaNacimiento'];?></td>       
                    <td>
                        <div class="tooltip-demo">
                            <button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="ace-icon fa fa-pencil bigger-120"></i></button> 
                            <button type="button" class="btn btn-xs btn-warning" data-toggle="tooltip" data-placement="bottom" title="Ver Cursos"> <i class="ace-icon fa fa-columns bigger-120"></i></button>           
                            <button type="button" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="bottom" title="Asistencias"><i class="ace-icon fa fa-check bigger-120"></i></button>         
                        </div>       
                    </td>     
                    </tr>     
                    <?php $i++;   

                } 
             } 
             
    ?>

    </tbody>







        
        <!-- /#page-wrapper -->
        <div class="modal fade" id="modalEstudiante" tabindex="-13" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="modalTitle">Datos del Estudiante</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="tipoDoc" class="col-sm-5 control-label">Tipo Documento</label>
                                <div class="col-sm-7">
                                    <select id="tipoDoc" name="tipoDoc" class="form-control">
                                        <option value="">- Seleccione -</option>
                                        <option value="01">DNI</option>
                                        <option value="02">Partida de Nacimiento</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nroDoc" class="col-sm-5 control-label">Nro. Documento</label>
                                <div class="col-sm-7">
                                    <input id="nroDoc" name="nroDoc" class="form-control" onfocus="this.select()">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nombres" class="col-sm-5 control-label">Nombres</label>
                                <div class="col-sm-7">
                                    <input id="nombres" name="nombres" class="form-control">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="apellidos" class="col-sm-5 control-label">Apellidos</label>
                                <div class="col-sm-7">
                                    <input id="apellidos" name="apellidos" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="form-group col-md-6">
                                <label for="direccion" class="col-sm-5 control-label">Dirección</label>
                                <div class="col-sm-7">
                                    <input id="direccion" name="direccion" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ciudad" class="col-sm-5 control-label">Ciudad</label>
                                <div class="col-sm-7">
                                    <input id="ciudad" name="ciudad" class="form-control" >
                                </div>
                            </div>                          
                        </div>
                        <div class="row">   
                            <div class="form-group col-md-6">
                                <label for="genero" class="col-sm-5 control-label">Género</label>
                                <div class="col-sm-7">
                                    <div class="radio">
                                        <label>
                                            <input id="generoM" name="genero" type="radio" />
                                            <span class="lbl"> Masculino</span>
                                        </label>
                                        <label>
                                            <input id="generoF" name="genero" type="radio" />
                                            <span class="lbl"> Femenino</span>
                                        </label>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group col-md-6">
                                <label for="email" class="col-sm-5 control-label">Correo Electrónico</label>
                                <div class="col-sm-7">
                                    <input id="email" name="email" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="form-group col-md-6">
                                <label for="telefono" class="col-sm-5 control-label">Teléfono</label>
                                <div class="col-sm-7">
                                    <input id="telefono" name="telefono" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                
                                <label for="fachanacimiento" class="col-sm-4 control-label" id="datepicker">Fecha de Nacimiento</label>
                                <div class="col-md-6">
                                      <div class="input-group date datepicker" id="datepicker">
                                        <input type="text" class="form-control" id="" name="datepicker">
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>                                    
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">
                            <i class="fa fa-save"></i>
                            Guardar
                        </button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <i class="ace-icon fa fa-times"></i>
                            Cancelar
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="modalListaEstudiantes" tabindex="-1" role="dialog" aria-labelledby="modalTitleLista" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="modalTitleLista">Lista de Estudiantes</h4>
                    </div>
                    <div class="modal-body" >
                        <div id="lista"> </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                            <i class="ace-icon fa fa-times"></i>
                            Cerrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>



    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datepicker.min.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
  
$( function() {
    $( "#datepicker" ).datepicker({
        format: 'dd-mm-yyyy'
    });
  });


    $(document).ready(function() {
        $('#dataTables-estudiantes').DataTable({
            "ordering": false,
            responsive: true,
            "language": {
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"                  
                },
                "info": "Mostrando _START_ a _END_ de _TOTAL_ elementos",
                "lengthMenu": "Mostrar _MENU_ elementos",
                "sSearch": "Buscar:"
            }
        });
        $('.tooltip-demo').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        });
    });
    function seleccionarTodo(object) {
      checkboxes = document.getElementsByName('fila');
      for(var i=0, n=checkboxes.length;i<n;i++) {
        checkboxes[i].checked = object.checked;
      }
    }
    function recorrerList() {
        $(document).ready(function() {
            var str = '';
            $("#dataTables-estudiantes tbody tr").each(function (i, item) {
                console.log(i, item);
                var numero = $(item).children().get(1);
                var dni = $(item).children().get(2);
                var nombres = $(item).children().get(3);
                str += '<p>Nro:' + $(numero).text() + ' DNI:' + $(dni).text() + ' Nombres:' + $(nombres).text() + '</p>';
            });
            $("#lista").html(str);
        });
    }



    </script>
</body>

</html>
