<?php
session_start();
include('utils.php'); 



if (isset($_POST)) {
  
  $_POST = sanitize($_POST);
	

	if(!empty($_POST["nom"]) AND !empty($_POST["prenom"])){
		$_SESSION ['civ'] = $_POST["civ"];
		$_SESSION ['prenom']= $_POST["prenom"];
		$_SESSION['nom'] = $_POST["nom"];
		 

		header('Location: battle.php?success=1');
	}
	else{

		header('Location: index.php?error=1');

	}

$cp = $_POST["cp"];


} else {
	
}


?>