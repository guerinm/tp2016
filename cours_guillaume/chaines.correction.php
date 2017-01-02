<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Les chaînes</title>
</head>
<body>

<?php
	
	// créez une variable "username", et affectez lui un pseudo en valeur
	
	$username = "Laeti";

	

	// affichez la longueur de la chaîne stockée

	strlen ( $username );

	echo strlen($username);
	
	echo "<br>";

	// créez une variable "email", contenant un email
	
	$email = "adressephp@gmail.com";

	// convertissez le tout en majuscule et stockez le résultat dans une variable
	
	$titleInCaps = strtoupper ($email);

	// affichez cette nouvelle variable, précédé du pseudo, sous cette forme : 
	// Votre pseudo est martin201 (email : martin@gmail.com)
	$title1 = "Votre pseudo est " . $username . " (email : " . $email .")";
		// ou echo "Votre pseudo est" . $username . "(email: " . $email . ")";

	echo $title1;

	echo "<br>";

	// Voici une variable contenant le titre d'un article
	$title = "Ceci est le titre d'un article";

	// comptez le nombre de mots et affichez le avec cette phrase : 
	// Le titre de l'article contient x nombre de mots
	
	str_word_count ( $title );

	$title2 = "Le titre de l'article contient " . str_word_count($title) . " nombre de mots";

	// ajoutez programmatiquement un point à la fin du titre (stocké dans la variable)
	
	$title2 .= ".";
	echo $title2;

	// convertissez la première de chaque mot du titre en majuscule
	
	$titleInCaps = ucwords($title2);

	//affichez le titre dans une balise HTML <h2>
	
	echo "<h2>$titleInCaps</h2>";

	echo "<br>";

	// ceci est le contenu de l'article : 
	$content = "Lorem ipsum dolor sit amen. Lorem ipsum dolor sit amen. Lorem ipsum dolor sit amen. Lorem ipsum dolor sit amen.";

	// affichez seulement les 10 premiers caractères
	
	echo substr("$content", 0, 10);
	echo "<br>";

	// remplacez les mots "amen" par le mot "amet" dans la variable
	
	$content = str_replace ("amen", "amet", $content);
	
	echo $content;

	echo "<br>";
	// affichez le contenu à l'envers (lisible de droite à gauche). 

echo strrev($content);

	//faites en sorte que chacune des phrases s'affiche à l'intérieur d'une balise <p>
	

	
?>

</body>
</html>