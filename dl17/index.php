<?php
session_start();


include('utils.php');  
	//var_dump($_GET);


$_SESSION['isLogged']="True";
$_SESSION['login']="Marlene";
?>

<!DOCTYPE html>
<html>
<head>
<title>Mon titre</title>
</head>
<meta charset="UTF-8">
<body>

<h1></h1>
<p>Mon paragraphe.</p>

<h4><?= messages($_GET) ?></h4>
* Info obligatoire
<form action="traitement.php" method="post">
	<select name="civ">
	  <option value="1">Monsieur</option>
	  <option value="2">Madame</option>
	  <option value="3">Mademoiselle</option>
	</select>
<br><br>
  Nom *:<br>  <input type="text"  name="nom" value=""><br>
  Prénom *:<br>  <input type="text" name="prenom" value=""><br><br>
  Code postal:<br>  <input type="text" name="cp" value=""><br><br>
  <input type="submit" name="inscription" value="Ok !">
</form>



<?php
$civ = 1;

echo civ($civ);
?>


</body>
</html>