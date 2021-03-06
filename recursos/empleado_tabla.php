<?php
error_reporting(0);
$id_vendedor = $_POST["id_vendedor"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$genero = $_POST["genero"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$localidad = $_POST["localidad"];
$puesto = $_POST["puesto"];
$action = $_POST["action"];
$modalMostrar = false;
switch($action){
case "editar":
  $modalMostrar = true;
break;
}
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/tree.ico" type="image/ico" />

    <title>Gestion </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-tree"></i> <span>Carpentry</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido, </span>
                <h2>Administrador</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="home.html"><i class="fa fa-home"></i> Home</a>
                    
                  </li>
                  <li><a><i class="fa fa-archive"></i> Productos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="producto_form.html">Agregar</a></li>
                      <li><a href="producto_tabla.php">Administrar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="cliente_form.html">Agregar</a></li>
                      <li><a href="cliente_tabla.php">Administrar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Empleados <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="empleado_form.html">Agregar</a></li>
                      <li><a href="empleado_tabla.php">Administrar</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> Ventas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                   
                        <li><a href="#level1_1">Crédito<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            </li>
                            <li><a href="ve_cre_form.html">Agregar</a>
                            </li>
                            <li><a href="ve_cre_tabla.php">Administrar</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level2_1">Contado<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            </li>
                            <li><a href="ve_co_form.html">Agregar</a>
                            </li>
                            <li><a href="ve_co_tabla.php">Administrar</a>
                            </li>
                          </ul>
                        </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
           
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Administrador
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Perfil</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span>configuración</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">ayuda</a>
                    <a class="dropdown-item"  href="../index.html"><i class="fa fa-sign-out pull-right"></i> Salir</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Empleados<small></small></h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabla <small>Empleados</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive ">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>ID Empleado</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Género</th>
                          <th>Dirección</th>
                          <th>Localidad</th>
                          <th>Teléfono</th>
                          <th>Puesto</th>
                          <th>Editar</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $conexion = mysqli_connect("localhost", "root","", "carpentry_proyect");
                        $sql="SELECT id_vendedor, nombre, apellido, genero, direccion, telefono, localidad, Puesto FROM vendedor";
                        $result=mysqli_query($conexion,$sql);
                        while($mostrar=mysqli_fetch_object($result)){
                          ?>
                        <tr>
                        <td><?php echo $mostrar->id_vendedor?></td>
                          <td><?php echo $mostrar->nombre?></td>
                          <td><?php echo $mostrar->apellido?></td>
                          <td><?php echo $mostrar->genero?></td>
                          <td><?php echo $mostrar->direccion?></td>
                          <td><?php echo $mostrar->telefono?></td>
                          <td><?php echo $mostrar->localidad?></td>
                          <td><?php echo $mostrar->Puesto?></td>

                          <td><form action="" method="POST">
                            <input type="hidden" id="id_vendedor" required="required" class="form-control "name ="id_vendedor" value ="<?php echo $mostrar->id_vendedor;?>">
                            <input type="hidden" id="nombre" required="required" class="form-control "name ="nombre" value ="<?php echo $mostrar->nombre;?>">
                            <input type="hidden" id="apellido" required="required" class="form-control "name ="apellido" value="<?php echo $mostrar->apellido;?>">
                            <input type="hidden" id="genero" required="required" class="form-control "name ="genero" value ="<?php echo $mostrar->genero;?>">
                            <input type="hidden" id="direccion" required="required" class="form-control "name ="direccion" value="<?php echo $mostrar->direccion;?>">

                            <input type="hidden" id="telefono" required="required" class="form-control "name ="telefono" value="<?php echo $mostrar->telefono;?>">
                            <input type="hidden" id="localidad" required="required" class="form-control "name ="localidad" value="<?php echo $mostrar->localidad;?>">

                            <input type="hidden" id="puesto" required="required" class="form-control "name ="puesto" value="<?php echo $mostrar->Puesto;?>">
                    
                          <a ><button class="btn btn-round btn btn-light btn-sm" value = "editar" name = "action"  type = "submit">
                          <span class = "fa fa-check" ></span></button></a>
                          <span class="btn btn-round btn-warning btn-sm" data-toggle="modal" data-target="#editar">
                          <span class = "fa fa-pencil-square-o"  ></span></span>
                          </form>
                          
                        </td>
                          <td style = "text-aling: center;" >
                            <a href="../conexiones/borrar_empleado.php?id_vendedor=<?php echo $mostrar->id_vendedor?>"><span class="btn btn-round btn-danger btn-sm"  onclick = "return confirmar()">
                             <span class = "fa fa-trash">

                            </span>
                        </span></a></td>


                        </tr>
                        <?php } ?>            
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div>



              
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <!-- Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a> -->
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->

    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      

      <form  class="form-horizontal form-label-left" action="../conexiones/modificar_empleado.php" method="POST">
      <input type="hidden" class="form-control" name="id_vendedor" id="id_vendedor" value = "<?php echo $id_vendedor ?>">
<div class="form-group row">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Nombre</label>
  <div class="col-md-6 col-sm-6">
    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" value = "<?php echo $nombre ?>">
    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Apellido</label>
  <div class="col-md-6 col-sm-6">
    <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido" value = "<?php echo $apellido?>"> 
    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
  </div>
</div>


  <div class="form-group row">
      <label class="col-form-label col-md-3 col-sm-3 label-align">Género</label>
    <div class="control-label col-md-6 col-sm-6  form-group has-feedback">
        <label class="control-labelcol-md-6 col-sm-6  form-group has-feedback">Masculino:
      <input type="radio" class="flat" name="genero" id="genero" value="Masculino" checked="" required /> </label>
      <label class="col-md-6 col-sm-6  form-group has-feedback">Femenino:
      <input type="radio" class="flat" name="genero" id="genero" value="Femenino" /></label>
    </div>
  </div>

<div class="form-group row">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Direccion</label>
  <div class="col-md-6 col-sm-6">
    <input type="text" class="form-control" name="direccion" id="direccion" value = "<?php echo $direccion ?>">
    <span class="fa fa-home form-control-feedback right" aria-hidden="true"></span>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Telefono</label>
  <div class="col-md-6 col-sm-6">
    <input type="text" class="form-control" placeholder="Télefono" data-inputmask="'mask' : '999 999 9999'" name="telefono" id="telefono" value = "<?php echo $telefono ?>">
    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Localidad</label>
  <div class="col-md-6 col-sm-6">
    <input type="text" class="form-control" name="localidad" id="localidad" value = "<?php echo $localidad ?>">
    <span class="fa fa-map-marker form-control-feedback right" aria-hidden="true"></span>
  </div>
</div>
<div class="form-group row">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Puesto</label>
  <div class="col-md-6 col-sm-6">
    <input type="text" class="form-control" name="puesto" id="puesto" value = "<?php echo $puesto ?>">
    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
  </div>
</div>
<div class="ln_solid"></div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
</form>
      </div>
      
    </div>
  </div>
</div>



<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Seguro?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div>Se eliminará por completo.</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
  </div>
</div>


<script>
  function confirmar(){
    var $con = confirm("¿Estas Seguro de emilinarlo?");
  if ($con == true) {
    return true;
  }
  else
  {
    return false;
  }
  }
</script>

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>