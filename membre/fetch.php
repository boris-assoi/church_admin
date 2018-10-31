<?php 
	include '../inc/connexion.php';
	include '../inc/functions.php';
	$requete = '';
	$output = array();
	$requete .= 'SELECT * FROM mesb_membre ';
	if (isset($_POST["search"]["value"])) {
		$requete .= 'WHERE membre_nom LIKE "%'.$_POST["search"]['value'].'%" ';
		$requete .= 'OR membre_prenom LIKE "%'.$_POST["search"]['value'].'%" ';
	}

	if (isset($_POST["order"])) {
		$requete .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
	}
	else {
		$requete .= 'ORDER BY membre_id DESC ';
	}

	if ((isset($_POST["length"])) && ($_POST["length"] != -1)) {
		$requete .= 'LIMIT '.$_POST['start'].', '.$_POST['length'];
	}

	//Tableau contenant le retour de la statementuête
	$data = array();

	$statement = $bdd->prepare($requete);
	$statement->execute();
	$result = $statement->fetch();

	$filtered_rows = $statement->rowCount();

	while($ok = $statement->fetch()){
		$check[] = $ok['membre_nom'];
		$check[] = $ok['membre_prenom'];
		$check[] = $ok['membre_dpmt'];
		$check[] = $ok['membre_est_baptise'];
		$check[] = $ok['membre_est_actif'];
		$check[] = $ok['membre_contact1'];
		$check[] = '<button type="button" name="view" id="'.$ok['membre_id'].'" class="btn btn-info view">Consulter</button>
		<button type="button" name="update" id="'.$ok['membre_id'].'" class="btn btn-success update">Modifier</button>
		<button type="button" name="delete" id="'.$ok['membre_id'].'" class="btn btn-danger delete">Supprimer</button>
		';
		$data[] = $check;
	}

	/*
	foreach ($result as $row) {
		$tuple = array();
		$tuple[] = $row['membre_nom'];
		$tuple[] = $row['membre_prenom'];
		$tuple[] = $row['membre_dpmt'];
		$tuple[] = $row['membre_est_baptise'];
		$tuple[] = $row['membre_est_actif'];
		$tuple[] = $row['membre_contact1'];
		$tuple[] = '<button type="button" name="view" id="'.$row['membre_id'].'" class="btn btn-info view"><i class="fa fa-fw fa-eye"></button>
		<button type="button" name="update" id="'.$row['membre_id'].'" class="btn btn-success update"><i class="fa fa-fw fa-edit"></button>
		<button type="button" name="delete" id="'.$row['membre_id'].'" class="btn btn-danger delete"><i class="fa fa-fw fa-trash-o"></button>
		';

		$data[] = $tuple;
	}
	*/

	$output = array(
		"recordsTotal"		=>	$filtered_rows,
		"recordsFiltered"	=>	get_total("membre"),
		"data"				=>	$data
	);

	echo json_encode($output);
?>