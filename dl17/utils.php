<?php


	function  pre($data){
		echo '<pre>';
		var_dump($data);
		echo '</pre>';
	}

//http://www.catswhocode.com/blog/10-awesome-php-functions-and-snippets
	function cleanInput($input) {

		$search = array(
		'@<script[^>]*?>.*?</script>@si',   // Strip out javascript
		'@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
		'@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
		'@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments
		);

		$output = preg_replace($search, '', $input);
		return $output;
	}

	function sanitize($input) {
	    if (is_array($input)) {
	        foreach($input as $var=>$val) {
	            $output[$var] = sanitize($val);
	        }
	    }
	    else {
	        if (get_magic_quotes_gpc()) {
	            $input = stripslashes($input);
	        }
	        $input  = cleanInput($input);
	        $output = htmlentities($input);
	    }
	    return $output;
	}



	function civ($civ){
		if(in_array($civ, array(1, 2, 3) )) {	
	 		return ($civ == 1) ?  "Mr" :	( ($civ == 2) ? "Mme"  : "Mlle" ) ;
		}
	}


	function messages($get){
	
		$message ="";

		if(isset($get["error"]) ){
			
			if($get["error"] == 1) 
				$message =" Vous avez des infos obligatoires a remplir, non mais !";
			if($get["error"] == 2) 
				$message =" Le code postal doit etre en chiffres et avoir une longueur max de 5";

		}

		if(isset($get["success"]) ){
			if($get["success"] == 1) 

				$message =" Vous voila bien inscrit ".civ($_SESSION['civ']). " ".$_SESSION['nom']. " ".$_SESSION['prenom'] ." !";
		}

		return $message;
	}
?>