<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>File</title>
</head>
<body>
	<?php if(isset($_SESSION['errors'])): ?>
		<?php foreach ($_SESSION['errors'] as $error): ?>
			<p><?= $error ?></p>
		<?php endforeach; ?>
	<?php endif; ?>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<label>
			Nom :
			<input type="text" name="nom"/>
		</label>
		<label>
			Fichier :
			<input type="file" name="myFile"/>
		</label>
		<input type="submit">
	</form>
</body>
</html>

<?php

	unset($_SESSION['errors']);

?>