<?php

function pre($data){ // cette fonction permet d'afficher les donnees du tableau'
	echo '<pre>';
	var_dump($data);
	echo '</pre>';

}

function renderSuper($type){ //1 ou 2 ou 3 
	$liste='';
	foreach($_SESSION['supers'] as $key => $super){// //affichez toutes les clefs et toutes les valeurs du tableau de chaque utilisateur , sans utiliser directement
		//les clefs dans votre code :
		

		if ($super["type"] ==$type ){

			$sup = '<a href="supprimer_super.php?id='.$key.'"><span class="glyphicon glyphicon-remove"></span></a>';

			$mod = '<a href="index.php?action=mod&id='.$key.'"><span class="glyphicon glyphicon-refresh"></span></a>';


			$liste .= '<li>'.$super["nom_scene"].' '.$super["cri_guerre"].'
			 '.$super["super_pouvoir"].'  '.$sup.'  '.$mod;

		}

	}
	
	return $liste;


}





?>