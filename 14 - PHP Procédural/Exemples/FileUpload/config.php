<?php

// Folder path
define("_UPLOAD_DIR_", __DIR__ . '/uploads/');
// Make folder if it doesnt exist
if(!file_exists(_UPLOAD_DIR_)){
	mkdir(_UPLOAD_DIR_);
}	