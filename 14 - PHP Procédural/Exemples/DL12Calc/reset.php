<?php
session_start();

//session_destroy();

unset($_SESSION['calculs']);

header('Location: index.php');