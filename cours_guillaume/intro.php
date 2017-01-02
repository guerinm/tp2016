<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
<?php
	
	$string = "Bonjour" . " " . "Johnny";

	echo $string;
	echo '<br>';

	echo "Hello world" ;	
	$song = "Over the rainbow";
	echo '<br>';

	echo 'Je t\'aime';
	echo "Je t'aime";

	echo '<div class="yo"></div>';

	$title = "Le titre de la chanson est " . $song;
	//concaténe à la fin de la chaîne
	$title .= "!";
	//équivalent à : 
	/*
		Commentaire
		multi-ligne
	 */
	//$title = $title . "!";
	echo $title;


	$title = strtoupper($title);
	//modifie la variable
	$title = "";

	//détruit la variable
	unset($title);

	echo $title;

?>

<br>
<?php
	echo $song;

?>
</body>
</html>


