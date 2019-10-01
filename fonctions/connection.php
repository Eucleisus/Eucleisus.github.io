<?php 
	function connection(){
		try{
			$bdd = new PDO('mysql:host=localhost;dbname=inf13', 'root', '') or die("Echec de connection a la base");
		}catch(Exception $e){
			die("Une erreur est survenue lord de la connection a la base de donne: ".$e->getMessage());
		}
		return $bdd;
	}

?>