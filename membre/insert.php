<?php 
	include '../inc/connexion.php';
	include '../inc/functions.php';

	if (isset($_POST["operation"])) {
		if ($_POST["operation"] == "ajouter") {
			$requete = 'INSERT INTO mesb_membre (membre_type, membre_nom, membre_prenom, membre_sexe, membre_email, membre_adresse, membre_datenais, membre_lieunais, membre_ethnie, membre_nationalite, membre_profession, membre_dpmt, membre_origine, membre_est_baptise, membre_date_bapteme, membre_est_malade, membre_maladie, membre_maladie_duree, membre_est_retraite, membre_est_actif, membre_contact1, membre_contact2, membre_matri, membre_famille) 
    VALUES ((SELECT type_id FROM mesb_type_membre WHERE type_lib = :type),:nom,:prenom,:sexe,:email,:adresse,:datenais,:lieunais,:ethnie,:nation,:pro,:cwork,:oldchurch,:isbapteme,:datebapteme,:ismalade,:maladie,:datemaladie,:isretraite,:isactif,:contact1,:contact2,(SELECT matri_id FROM mesb_matri WHERE matri_lib = :matri),(SELECT famille_id FROM mesb_famille WHERE famille_nom = :famille))';

			$statement = $bdd->prepare($requete);

		    $statement->bindParam(':type', $type, PDO::PARAM_INT);
		    $statement->bindParam(':nom', $nom, PDO::PARAM_STR);
		    $statement->bindParam(':prenom', $prenom, PDO::PARAM_STR);
		    $statement->bindParam(':sexe', $sexe, PDO::PARAM_STR);
		    $statement->bindParam(':email', $email, PDO::PARAM_STR);
		    $statement->bindParam(':adresse', $adresse, PDO::PARAM_STR);
		    $statement->bindParam(':datenais', $datenais, PDO::PARAM_STR);
		    $statement->bindParam(':lieunais', $lieunais, PDO::PARAM_STR);
		    $statement->bindParam(':ethnie', $ethnie, PDO::PARAM_STR);
		    $statement->bindParam(':nation', $nation, PDO::PARAM_STR);
		    $statement->bindParam(':pro', $pro, PDO::PARAM_STR);
		    $statement->bindParam(':cwork', $cwork, PDO::PARAM_STR);
		    $statement->bindParam(':oldchurch', $oldchurch, PDO::PARAM_STR);
		    $statement->bindParam(':isbapteme', $isbapteme, PDO::PARAM_STR);
		    $statement->bindParam(':datebapteme', $datebapteme, PDO::PARAM_STR);
		    $statement->bindParam(':ismalade', $isbapteme, PDO::PARAM_STR);
		    $statement->bindParam(':maladie', $maladie, PDO::PARAM_STR);
		    $statement->bindParam(':datemaladie', $datemaladie, PDO::PARAM_STR);
		    $statement->bindParam(':isretraite', $isretraite, PDO::PARAM_STR);
		    $statement->bindParam(':isactif', $isactif, PDO::PARAM_STR);
		    $statement->bindParam(':contact1', $contact1, PDO::PARAM_STR);
		    $statement->bindParam(':contact2', $contact2, PDO::PARAM_STR);
		    $statement->bindParam(':matri', $matri, PDO::PARAM_INT);
		    $statement->bindParam(':famille', $famille, PDO::PARAM_INT);

			$result = $statement->execute();

			if (!empty($result)) {
				echo "Membre ajouté";
			}
		    $statement->closeCursor();

		    if (isset($_POST['cfamily'])) {
		        //Ajout de la famille
		        $request = 'INSERT INTO mesb_famille (famille_nom, famille_local, famille_chef) VALUES (:fNom,:fLocal,(SELECT membre_id FROM mesb_membre ORDER BY membre_id DESC LIMIT 1))';

		        $statement = $bdd->prepare($request);
		        $statement->bindParam(':fNom', $nom, PDO::PARAM_STR);
		        $statement->bindParam(':fLocal', $adresse, PDO::PARAM_STR);

		        $statement->execute();
		        $statement->closeCursor();

		        //Mise à jour de la famille pour le membre chef de famille
		        $request = 'UPDATE mesb_membre SET membre_famille = (SELECT famille_id FROM mesb_famille ORDER BY famille_id DESC LIMIT 1) WHERE membre_id = (SELECT membre_id FROM mesb_membre ORDER BY membre_id DESC LIMIT 1)';

		        $statement = $bdd->prepare($request);
		        $statement->execute();
		        $statement->closeCursor();
		    }
		}
	}
?>