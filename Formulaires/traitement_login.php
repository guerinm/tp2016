<?php
session_start();

$login= "marlene";
$mdp="122";


if($_POST["submit"]=="se connecter"){
if($_POST["name"]==$login AND $_POST["password"]== $mdp){
    $_SESSION["logged"]=true;
    $_SESSION["name"] =ucfirst($login);
    header('location : index.php');

}
else{
    header('location: form_login.php?error=12');
}
}
else{
    header('location : index.php');
}

if($_POST["submit"] == "se deconnecter"){
    
}


	
		



// Déconnexion
if ((isset($_GET['action'])) && ($_GET['act'] == 'logout'))
{
	$_SESSION = array();
	session_destroy();
 
	// on relance une session
	session_start();
};
?>