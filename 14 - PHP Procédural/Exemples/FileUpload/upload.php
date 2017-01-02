<?php
session_start();

require_once "config.php";

// keys are PHP constants
$uploadErrors = [
	UPLOAD_ERR_INI_SIZE => "Taille > php.ini",
	UPLOAD_ERR_FORM_SIZE => "Taille > MAX_FILE_SIZE",
	UPLOAD_ERR_PARTIAL => "Fichier partiellement dl"
];

$_SESSION['errors'] = [];

$errorCode = $_FILES['myFile']['error'];

// myFile exists and there is no error
if(isset($_FILES['myFile']) && $errorCode === 0){

	$name = $_FILES['myFile']['name'];
	$temp = $_FILES['myFile']['tmp_name'];	

	// Full path (dir + file name)
	$destination = _UPLOAD_DIR_ . $name;

	// Move temp file in destination folder
	move_uploaded_file($temp, $destination);
	
}
else{
	// Add error in our errors array
	$_SESSION['errors'][] = $uploadErrors[$errorCode];
}

header('Location: index.php');