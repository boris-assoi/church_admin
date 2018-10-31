<?php 
	function get_total($element){
		include 'connexion.php';
		$req = $bdd->prepare("SELECT * FROM ".$element."");
		$req->execute();
		return $req->rowCount();
	}
?>