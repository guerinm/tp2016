<?php
session_start();

if (isset($_GET) AND !empty($_GET['id'])) {

	unset($_SESSION['supers'][$_GET['id']]);
	header('Location: index.php?success=1');
}


header('Location: index.php?error=3');

?>