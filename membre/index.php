<?php
try
{
    include_once "../inc/connexion.php";
?> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <meta name="description" content=""> 
        <meta name="author" content=""> 
        <title>MESB | Membres</title>         
        <!-- Bootstrap Core CSS -->         
        <link href="../css/bootstrap.min.css" rel="stylesheet"> 
        <!-- Custom CSS -->         
        <link href="../css/sb-admin.css" rel="stylesheet">
        <!-- Custom Fonts -->         
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
        <!-- Datables CSS -->
        <link href="../css/datatables.min.css" rel="stylesheet" type="text/css">
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
                    <a class="navbar-brand" href="./index.php">MESB</a> 
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
                            <h1 class="page-header"> <span>Liste des membres</span> </h1> 
                                                       
                            <div class="row"> 
                                <div> 
                                    <div class="panel panel-default"> 
                                        <div class="panel-heading">
                                            <button type="button" class="btn btn-info" id="add_button" data-toggle="modal" data-target="#memberModal">
                                                <i class="fa fa-fw fa-plus"></i> Ajouter
                                            </button>
                                        </div>                                         
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover table-striped" id="member_data">
                                                    <thead>
                                                        <tr>
                                                            <th>Nom de famille</th>
                                                            <th>Prénom(s)</th>
                                                            <th>Département</th>
                                                            <th>Baptisé</th>
                                                            <th>Actif</th>
                                                            <th>Contact</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>                                            
                                            <div class="text-right"></div>                                             
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
                <script src="../js/jquery.js"></script>                 
                <!-- Bootstrap Core JavaScript -->                 
                <script src="../js/bootstrap.min.js"></script>
                <!-- IN-VIEW js -->
                <script src="../js/in-view.min.js"></script>
                <!-- Datatable Javascript -->
                <script src="../js/datatables.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('#add_button').click(function(){
                            $('#user_form')[0].reset();
                            $('.modal-title').text("Ajouter un membre");
                            $('#action').val("Add");
                            $('#operation').val("Add");
                            $('user_uploaded_image').html('');
                        });

                        var dataTable = $('#member_data').DataTable({
                            "processing":true,
                            "serverSide":true,
                            "order":[],
                            "ajax":{
                                url:"fetch.php",
                                method:"POST"
                            },
                            "columnsDefs":[
                                {
                                    "target":[0,3,4],
                                    "orderable":true
                                }
                            ],
                            language:{
                                processing:     "Traitement en cours ...",
                                search:         "Filtrer&nbsp;:",
                                lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
                                info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                                infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                                infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                                infoPostFix:    "",
                                loadingRecords: "Chargement des données ...",
                                zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                                emptyTable:     "Aucune donnée disponible dans le tableau",
                                paginate: {
                                    first:      "Premier",
                                    previous:   "Pr&eacute;c&eacute;dent",
                                    next:       "Suivant",
                                    last:       "Dernier"
                                },
                                aria: {
                                    sortAscending:  ": activer pour trier la colonne par ordre croissant",
                                    sortDescending: ": activer pour trier la colonne par ordre décroissant"
                                }
                            }
                        });

                        $(document).on('submit', '#member_form', function(event){
                            event.preventDefault();
                            var type = $('#type').val();
                            var nom = $('#nom').val();
                            var prenom = $('#prenom').val();
                            var sexe = $('#sexe').val();
                            var email = $('#email').val();
                            var adresse = $('#adresse').val();
                            var datenais = $('#datenais').val();
                            var lieunais = $('#lieunais').val();
                            var ethnie = $('#ethnie').val();
                            var nation = $('#nation').val();
                            var pro = $('#pro').val();
                            var cwork = $('#cwork').val();
                            var oldchurch = $('#oldchurch').val();
                            var isbapteme = $('#isbapteme').val();
                            var datebapteme = $('#datebapteme').val();
                            var ismalade = $('#ismalade').val();
                            var maladie = $('#maladie').val();
                            var datemaladie = $('#datemaladie').val();
                            var isretraite = $('#isretraite').val();
                            var isactif = $('#isactif').val();
                            var contact1 = $('#contact1').val();
                            var contact2 = $('#contact2').val();
                            var matri = $('#matri').val();
                            var cfamily = $('#cfamily').val();
                            var famille = $('#famille').val();

                            $.ajax({
                                url: "insert.php",
                                method: "POST",
                                data: new FormData(this),
                                contentType: false,
                                processData: false,
                                success: function(data){
                                    alert("Membre ajouté");
                                    $('#member_form')[0].reset();
                                    $('#memberModal').modal('hide');
                                    dataTable.ajax.reload();
                                }
                            });
                        });
                        
                    });
                </script>
                <div id="memberModal" class="modal fade">
                    <div class="modal-dialog">
                        <form method="POST" id="member_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Ajouter un membre</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group"> 
                                        <label class="control-label" for="formInput37">Type de membre</label>
                                        <select id="type" class="form-control" name="type" required="required"> 
                                            <?php
                                                $request='SELECT type_lib FROM type_membre';
                                                $req = $bdd->query($request);
                                                while ($ok = $req->fetch())
                                                {
                                                    echo "<option class=\"\">".htmlspecialchars($ok['type_lib'])."</option>";    
                                                }
                                                $req->closeCursor();                        
                                            ?>                                                         
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Nom</label>
                                        <input id="nom" type="text" class="form-control" name="nom" placeholder="Nom" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Prénom(s)</label>
                                        <input type="text" class="form-control" placeholder="Prénom(s)" name="prenom" id="prenom">
                                    </div>
                                    <div class="form-group"> 
                                        <label class="control-label" for="formInput37">Sexe</label>
                                        <select id="sexe" class="form-control" name="sexe" required="required"> 
                                            <option>Homme</option>
                                            <option>Femme</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Adresse électronique">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Adresse</label>
                                        <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Date de naissance</label>
                                        <input type="date" class="form-control" name="datenais" id="datenais" placeholder="Date de naissance">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Lieu de naissance</label>
                                        <input type="text" class="form-control" name="lieunais" id="lieunais" placeholder="Lieu de naissance">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Ethnie</label>
                                        <input type="text" class="form-control" placeholder="Ethnie" name="ethnie" id="ethnie">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Nationalité</label>
                                        <input type="text" class="form-control" placeholder="Nationalité" name="nation" id="nation">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Profession</label>
                                        <input type="text" class="form-control" placeholder="Profession" name="pro" id="pro">
                                    </div>
                                    <div class="form-group"> 
                                        <label class="control-label" for="formInput37">Fonction dans l'église</label>
                                        <select id="cwork" class="form-control" name="cwork"> 
                                            <?php
                                                $request='SELECT dpmt_lib FROM departement';
                                                $req = $bdd->query($request);
                                                while ($ok = $req->fetch())
                                                {
                                                    echo "<option class=\"\">".htmlspecialchars($ok['dpmt_lib'])."</option>";    
                                                }
                                                $req->closeCursor();                        
                                            ?>                                                         
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Eglise d'origine</label>
                                        <input type="text" class="form-control" name="oldchurch" id="oldchurch" placeholder="Eglise d'origine">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            <input class="control-label" type="checkbox" name="isbapteme" id="isbapteme" value="oui"> Baptisé
                                        </label>
                                        <input type="date" class="form-control" name="datebapteme" id="datebapteme" placeholder="Date de baptème">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            <input class="control-label" type="checkbox" name="ismalade" id="ismalade" value="oui"> Malade
                                        </label>
                                        <input type="text" class="form-control" name="maladie" id="maladie" placeholder="Maladie"><br>
                                        <input type="date" class="form-control" name="datemaladie" id="datemaladie" placeholder="Début de la maladie">
                                    </div>
                                    <div class="form-inline">
                                        <label> 
                                            <input class="control-label" type="checkbox" name="isretraite" id="isretraite" value="oui"> Retraité
                                        </label>
                                        <label> 
                                            <input class="control-label" type="checkbox" name="isactif" id="isactif" value="oui"> Actif
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Contact 1</label>
                                        <input type="text" class="form-control" placeholder="Entrer votre 1er contact" name="contact1" id="contact1">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="exampleInputPassword1">Contact 2</label>
                                        <input type="text" class="form-control" placeholder="Entrer votre 2nd contact" name="contact2" id="contact2">
                                    </div>
                                    <div class="form-group"> 
                                        <label class="control-label" for="formInput37">Situtation matrimoniale</label>
                                        <select id="formInput28" class="form-control" name="matri" id="matri"> 
                                            <?php
                                                $request='SELECT matri_lib FROM matri';
                                                $req = $bdd->query($request);
                                                while ($ok = $req->fetch())
                                                {
                                                    echo "<option class=\"\">".htmlspecialchars($ok['matri_lib'])."</option>";    
                                                }
                                                $req->closeCursor();                        
                                            ?>                                                         
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            <input class="control-label" type="checkbox" name="cfamily" id="cfamily" value="oui"> Chef de famille
                                        </label>
                                    </div>
                                    <div class="form-group"> 
                                        <label class="control-label" for="formInput37">Famille</label>
                                        <select id="famille" class="form-control" name="famille">
                                            <option>Aucune</option>
                                            <?php
                                                $request='SELECT famille_nom FROM famille';
                                                $req = $bdd->query($request);
                                                while ($ok = $req->fetch())
                                                {
                                                    echo "<option class=\"\">".htmlspecialchars($ok['famille_nom'])."</option>";    
                                                }
                                                $req->closeCursor();                        
                                            ?>                                                         
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="membre_id" id="membre_id" />
                                    <input type="hidden" name="operation" id="operation" />
                                    <input type="submit" name="action" id="action" class="btn btn-success" value="Ajouter">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                    }
                    catch (Exception $e)
                    {
                        die('Erreur:'.$e->getMessage());
                    }
                ?>    
        </body>     
</html>
