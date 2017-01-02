<?php
session_start();

var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Calculatrice</title>
</head>
<body>
	<h1>Calculatrice</h1>
	<form action="calcul.php" method="GET">
		<input type="text" name="nb1"/>
		<select name="op">
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
		</select>
		<input type="text" name="nb2"/>
		<input type="submit" />
	</form>
	<?php if(isset($_SESSION['calculs'])): ?>
		<ol>
			<?php foreach ($_SESSION['calculs'] as $calcul): ?>
				<li><?= $calcul ?></li>
			<?php endforeach; ?>			
		</ol>

	<a href="reset.php">Supprimer l'historique</a>
	<?php endif; ?>
	
</body>
</html>