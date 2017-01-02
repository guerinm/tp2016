<?php
session_start();

include('outils.php');

//mettre le tableau php de super heros et super vilain
//etape 1
//verifier si j'ai en session un tableau de super heros et un tableau de super vilain
//si il ne sont pas en session, je les crée et je les ajoute en session_id
//sinon (si il existe en session) je les recupere

//2 -
//ajouter dans le tableau qui va bien le super heros ou super vilain

//3 - rediriger vers la page index



session_start();

if (isset($_POST) AND !empty($_POST)) {
  

	if(!empty($_POST["id"]) AND !empty($_POST["type"]) AND !empty($_POST["nom"])AND !empty($_POST["cri"])AND !empty($_POST["sp"])){
		

		if ($_POST["id"]  == -1) { //je suis en ajout (ça commence à -1 car le compteur des inscriptions commence à 0 en Php)
		$_SESSION['supers'] [] = [
								  "type"=>$_POST["type"], 
								  "nom"=>$_POST["nom"], 
								  "cri"=>$_POST["cri"], 
								  "sp"=>$_POST["sp"]
								 ];
			header('Location: battle.php?success=1');					 
		}
		
		if ($_POST["id"]  >= 0) { //je suis en modif la modif se fera à partir de 0 forcément 
		$_SESSION['supers'] [$_POST["id"]] = [
								  "type"=>$_POST["type"], 
								  "nom"=>$_POST["nom"], 
								  "cri"=>$_POST["cri"], 
								  "sp"=>$_POST["sp"]
								 ];
			header('Location: battle.php?success=2');
		}


	}
	else{

		header('Location: index.php?error=2');

	}


} else {
	header('Location: index.php?error=1');
}







?>

