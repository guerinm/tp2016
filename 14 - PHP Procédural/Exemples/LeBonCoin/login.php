<?php
// Login.php

var_dump($_GET);

var_dump($_POST);

$login = htmlentities($_POST['login']);
$pwd = strip_tags($_POST['pwd']);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	Votre login est : <?php echo $login; ?>

	Votre mot de passe est : <?= $pwd ?>
</body>
</html>