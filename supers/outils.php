<?php


	function  pre($data){
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
	}

	

	function messages($get){
	
		$message ="";

		if(isset($get["error"]) ){
			
			if($get["error"] == 1) 
				$message =" T'as pas tout rempli, recommence !";
			if($get["error"] == 2) 
				$message =" Ce n'est pas un cri de guerre ça !";
                if($get["error"] == 3) 
				$message =" Un pouvoir on t'as dit, pas de chiffres !";

		}

		if(isset($get["success"]) ){
			if($get["success"] == 1)

				$message =" Tu vas pouvoir combattre ! ".type($_SESSION['type']). " ".$_SESSION['nom']. " ".$_SESSION['cri'] ."".$_SESSION['sp']." !";
		}
        

		return $message;
	}

function renderSuper($type){ //1 ou 2  
	$liste='';
	foreach($_SESSION['supers'] as $key => $super){// //affichez toutes les clefs et toutes les valeurs du tableau de chaque utilisateur , sans utiliser directement
		
		

		if ($super["type"] ==$type ){

			$sup = '<a href="outils.php?id='.$key.'"><span class="glyphicon glyphicon-remove"></span></a>';

			$mod = '<a href="index.php?action=mod&id='.$key.'"><span class="glyphicon glyphicon-refresh"></span></a>';


			$liste .= '<li>'.$super["nom"].' '.$super["cri"].'
			 '.$super["sp"].'  '.$sup.'  '.$mod;

		}

	}
	
	return $liste;


}


	
?>
