<!DOCTYPE html>
<html>
<body>

<?php
 $prenom = isset($GET['prenom']) ? trim($GET['prenom']) : '' ;
 $nom = isset($GET['nom']) ? trim($GET['nom']) : '' ;

function check($input){
return !empty($_GET) && empty($input) ;
}


?>

<?php

if (trim($_GET['prenom']) AND trim($_GET['nom'])) // On a le nom et le prénom - trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
{
	echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un nom et un prénom !';
}
?>


</body>
</html>


