<?php
session_start();
include'outils.php';



if (isset($_GET) AND !empty($_GET['id'])) {
    
    unset($_SESSION['supers'][$_GET['id']]);
    header('Location: index.php?success=1');
}


header('Location: index.php?error=3');



function listeSupersParType($type){
    
    if ($type==1) $typeTab="gentils";
    if ($type==2) $typeTab="méchants";
    
    
    foreach($_SESSION['supers'] as $key => $super){
        
        if($super["type"]== $type){
            
            $_SESSION[$tabPersos][]=[
            "type"=> $super["type"],
            "nom"=> $super["nom"],
            "cri"=> $super["cri"],
            "sp"=> $super["sp"]
            ];
        }
    }
  return $tabPersos;  
}
?>