<?php
include("utils.php"); //Ici j'appelle le fichier utils.php pour utiliser ses fonctions'
//etape 1
//pre($_POST);//ici var_dump amélioré avec la fonction pre()

if(isset($_POST)){
    $_POST= sanitize($_POST);
    

   if(!empty($_POST["nom"]) AND !empty($_POST["prenom"])){
       $nom=$_POST["nom"];
       $prenom=$_POST["prenom"];

       header('Location : index.php?error=0&nom=' .$nom. '$prenom=' .$prenom. '');
   }
else{

    header('Location: index.php?error=1');
}
}
?>