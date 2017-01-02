<?php
session_start();

$errors = [];

if(!isset($_SESSION['calculs'])){
	$_SESSION['calculs'] = [];
}

// We got what we want
if(isset($_GET['nb1'], $_GET['nb2'], $_GET['op'])){
	if($_GET['nb1'] === '' || $_GET['nb2'] === ''){
		$errors[] = 'Vous devez renseigner deux valeurs';
	}

	$nb1 = (float)$_GET['nb1'];
	$nb2 = (float)$_GET['nb2'];
	$op = htmlentities($_GET['op']);
	$calcul = "$nb1 $op $nb2 = ";
	

	switch($op){
		case '+':
			$calcul .= ($nb1 + $nb2);
			break;
		case '-':
			$calcul .= ($nb1 - $nb2);
			break;
		case '*':
			$calcul .= ($nb1 * $nb2);
			break;
		case '/':
			if($nb2 === 0.0){
				$errors[] = 'Pas de division par zéro.';
			}else{
				$calcul .= ($nb1 / $nb2);
			}
			break;
		default:
			header('Location: index.php');
	}

	$_SESSION['calculs'][] = $calcul;



}

header('Location: index.php');
