<!DOCTYPE html>
<html>
    <head>
        <title>4k</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- jQuery UI -->
        <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- styles -->
        <link href="css/styles.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="index.html">Sistema de control contable</a></h1>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <!--	                  <div class="input-group form">
                                                               <input type="text" class="form-control" placeholder="Search...">
                                                               <span class="input-group-btn">
                                                                 <button class="btn btn-primary" type="button">Search</button>
                                                               </span>
                                                          </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="navbar navbar-inverse" role="banner">
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Cuenta <b class="caret"></b></a>
                                        <ul class="dropdown-menu animated fadeInUp">
                                            <li><a href="profile.html">Profile</a></li>
                                            <li><a href="login.html">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content">
            <div class="row">
                <div class="col-md-2">
                    <div class="sidebar content-box" style="display: block;">
                        <?php require_once './menu.php'; ?>
                    </div>
                </div>
                <div class="col-md-10">

                    <div class="content-box-large">
                        <div class="panel-heading">
                            <div class="panel-title">Empresas</div>
                        </div>
                        <div class="panel-body">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Empresa</th>
                                        <th>Propietario</th>
                                        <th>Tipo</th>
                                        <th>Vencimiento</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>Estudio 4k</td>
                                        <td>Fredy Vera</td>
                                        <td>Servicios Personales</td>
                                        <td class="center"> 28/09/2017</td>
                                        <td class="center">Activa</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td>Las Palemras</td>
                                        <td>Fredy Vera</td>
                                        <td>Compras Ventas</td>
                                        <td class="center">29/09/2017</td>
                                        <td class="center">Activa</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <footer>
            <div class="container">

                <div class="copy text-center">
                    Estudio 4k <a href='#'></a>
                </div>

            </div>
        </footer>
        <!--<link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- jQuery UI -->
        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

        <script src="vendors/datatables/dataTables.bootstrap.js"></script>

        <script src="js/custom.js"></script>
        <script src="js/tables.js"></script>
    </body>
</html>