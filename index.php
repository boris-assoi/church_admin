<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>MESB | Ajouter un nouveau membre</title>         
        <!-- Bootstrap Core CSS -->         
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <!-- Custom CSS -->         
        <link href="css/sb-admin.css" rel="stylesheet"> 
        <!-- Morris Charts CSS -->         
        <link href="css/plugins/morris.css" rel="stylesheet"> 
        <!-- Custom Fonts -->         
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
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
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
                <!-- Brand and toggle get grouped for better mobile display -->                 
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                    </button>                     
                    <a class="navbar-brand" href="index.html">MESB</a> 
                </div>                 
                <!-- Top Menu Items -->                 
                <ul class="nav navbar-right top-nav"> 
                    <li class="dropdown"> 
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a> 
                        <ul class="dropdown-menu"> 
                            <li> 
                                <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a> 
                            </li>                             
                            <li> 
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a> 
                            </li>                             
                            <li> 
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a> 
                            </li>                             
                            <li class="divider"></li>                             
                            <li> 
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a> 
                            </li>                             
                        </ul>                         
                    </li>                     
                </ul>                 
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->                 
               <div class="collapse navbar-collapse navbar-ex1-collapse"> 
                    <ul class="nav navbar-nav side-nav"> 
                        <li class="active"> 
                            <a href="http://localhost/church_admin/"><i class="fa fa-fw fa-home"></i> Accueil</a> 
                        </li>                         
                        <li> 
                            <a href="http://localhost/church_admin/membre/"><i class="fa fa-fw fa-user"></i> Membre</a> 
                        </li>                       
                    </ul>                     
                </div>               
                <!-- /.navbar-collapse -->                 
            </nav>             
            <div id="page-wrapper"> 
                <div class="container-fluid"> 
                    <!-- Page Heading -->                     
                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <h1 class="page-header"> <span>Bienvenue</span> </h1> 
                            <!--<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> tableaux
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->                             
                            <!-- /.row -->                             
                            <div class="row"> 
                                <div> 
                                    <div class="panel panel-default"> 
                                        <div class="panel-heading"> 
</div>                                         
                                        <div class="panel-body">                                              
                                            <div class="panel-body">
                                                <div class="text-right"></div>
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading">
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <i class="fa fa-5x fa-plus-circle"></i>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                            <a href="member/newMember.html">
                                                                <div class="panel-footer">
                                                                    <span class="pull-left">Ajouter un membre</span>
                                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading">
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <i class="fa fa-5x fa-user"></i>
                                                                    </div>
                                                                    <div class="col-xs-9 text-right">
</div>
                                                                </div>
                                                            </div>
                                                            <a href="member/members.html">
                                                                <div class="panel-footer">
                                                                    <span class="pull-left">Liste des membres</span>
                                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="panel panel-primary">
                                                            <div class="panel-heading">
                                                                <div class="row">
                                                                    <div class="col-xs-3">
                                                                        <i class="fa fa-5x fa-users"></i>
                                                                    </div>
                                                                    <div class="col-xs-9 text-right">
</div>
                                                                </div>
                                                            </div>
                                                            <a href="family/families.html">
                                                                <div class="panel-footer">
                                                                    <span class="pull-left">Liste des familles</span>
                                                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                             
                                        </div>                                         
                                    </div>                                     
                                </div>
                            </div>                             
                            <!-- /.container-fluid -->                             
                        </div>                         
                        <!-- /#page-wrapper -->                         
                    </div>                     
                    <!-- /#wrapper -->                     
                    <!-- jQuery -->                     
                    <script src="js/jquery.js"></script>                     
                    <!-- Bootstrap Core JavaScript -->                     
                    <script src="js/bootstrap.min.js"></script>                     
                    <!-- Morris Charts JavaScript -->                     
                    <script src="js/plugins/morris/raphael.min.js"></script>                     
                    <script src="js/plugins/morris/morris.min.js"></script>                     
                    <script src="js/plugins/morris/morris-data.js"></script>                     
    </body>     
</html>
