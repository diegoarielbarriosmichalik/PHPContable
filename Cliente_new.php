<!DOCTYPE html>
<html>
    <head>
        <title>4k</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                <!--                                <div class="input-group form">
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
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi cuenta<b class="caret"></b></a>
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
                            <div class="panel-title">Complete los datos</div>

                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                                <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form action="">
                                <fieldset>
                                    <div class="form-group">
                                        <label>Nombre del Cliente</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Direccion</label>
                                        <input class="form-control" placeholder="" type="text">
                                    </div>
                                </fieldset>
                                <div>
                                    <div class="btn btn-primary">
                                        <i class="fa fa-save"></i>
                                        Guardar
                                    </div>
                                </div>
                            </form>
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

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>