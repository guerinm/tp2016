<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Les conditions</title>
</head>
<body>

<?php
    
    //testez que x est plus grand que 12
    $x = 13;
if($x>12){
    echo "x est plus grand que 12";
}


    //testez que x est égal à 13
   
    if($x==13) {
    echo "x est égal à 13";
}
    //testez que x est plus petit que 22 ou plus grand que 33
    
    if($x<22) {
        echo " x est inférieur à 22";
}
  elseif($x>33) {
      echo " x est supérieur à 33";
  }
if ($x<22 || $x>33){
    echo "blabla";
}
    //testez que x est bel et bien un entier
    //si c'est un entier, affichez "OK", sinon, affichez "oups"
  
    if($x='is_int'){
        echo " Ok";
    }
    else{
        echo "oups";
    }
//opérateur ternaire
echo ('is_int'($x)) ? "ok":"oups";
//ou pour affecter une valeur
$v = (5>10) ? "oui" : "non";
    //vérifiez que la chaîne suivante est un email valide avec filter_var()
    $email = "yo@gmail.fr";
$emailTest = filter_var($email, FILTER_VALIDATE_EMAIL);
if($emailTest ==true) {
    echo "email valide";
}
else{
    echo "email invalide";
}
    //vérifiez que l'email contient entre 5 et 100 caractères :
    //s'il contient moins de 5 caractères caractère, affichez "trop court!"
    //s'il contient plus de 100, affichez "trop long"
    //s'il contient plus de 200, affichez "vraiment trop long"
    //s'il contient entre 5 et 100, affichez "l'email yo@gmail.fr est OK"
    
$emailLenght = strlen($email);
if ($emailLenght <5)[{
    echo "trop court";
}
elseif ($emailLenght>1100){
    if($emailLenght>200){
        echo "vraiment";
    }
echo "trop long";
}
else{
    echo "email $email ok;"
}

?>

</body>
</html>