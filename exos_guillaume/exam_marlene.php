<?php

/*******************************************************************
renommez le fichier afin qu'il contienne votre prénom

vous ne pouvez pas consulter vos collègues
vous pouvez consulter vos codes passés
vous pouvez consulter le web mais pas de copier-coller
vous pouvez me consulter mais vous perdez 1 point par mot prononcé

4 questions de 5 points, total sur 20. La correction N'est PAS en mode tout ou rien.
1 bonus de 3 points possible

envoyer votre fichier à gsylvestre@gmail.com à 17:00 maximum
**********************************************************************/


/*
	A. Produisez le code permettant de valider un email et d'afficher des messages d'erreur précis. Stockez d'abord un email dans une variable nommée "email". Ensuite, tester la en validant ainsi : 
		- la chaîne doit être une chaîne
		- la longueur de la chaîne doit être comprise entre 5 et 255 caractères
		- elle doit passer le test du filter_var
		- vous n'acceptez que des emails provenant de certains domaines (@gmail.com, @hotmail.com, @outlook.fr et @orange.fr). Assurez-vous qu'un de ces domaines est présent dans l'email.
 */
$email = "lumpy6@gmail.com";
$domaine = "@gmail.com, @hotmail.com, @outlook.fr, @orange.fr";
if($email='is_string'){
        echo "email valide";
    }
    else{
        echo "email non valide";
    }

$emailTest = filter_var($email, FILTER_VALIDATE_EMAIL);
if($emailTest ==true) {
    echo "email valide";
}
else{
    echo "email invalide";
}
$emailLenght = strlen($email);
if ($emailLenght <5){
    echo "pas assez long";
}
elseif ($emailLenght>255){
	echo "trop long";
}
else{
    echo "email $email ok;";
}
if($domaine<>$domaine){
	echo "domaine non conforme";
}


  ?>  
   
<?php
/*
	B. Créez un tableau contenant tous les jours de la semaine. Affichez-les ensuite en ordre alphabétique, chaque jour précédé d'un numéro d'ordre. Chaque jour doit être affiché dans une balise <p>.

	Résultat attendu : 
		<p>1. dimanche</p>
		<p>2. jeudi</p>
		<p>3. mardi</p>
		etc...
 */

$array = ["lundi"=>1, "mardi"=>2, "mercredi"=>3, "jeudi"=>4, "vendredi"=>5, "samedi"=>6, "dimanche"=>7];	
var_dump($array);
/*
foreach($array as $valeur){
    echo $valeur;
}
foreach($arrays as $key=>$valeur){
    echo "<p>$key : $valeur</p>";
}
var_dump($array); 
*/
                          



  
  

 
/*
	C. Calculez le diamètre, la circonférence et l'aire d'un cercle ayant un rayon de 6,5 centimètres. 
	La formule de la circonférence d'un cercle : 2πr
	aire : πr² 

	Stockez les résultats dans un tableau nommé "cercle" comprenant les clefs suivantes : 
		rayon
		diametre
		circ
		aire

	puis faites un var_dump de ce tableau
 */
$rayon = 6.5;
$diam = $rayon*2;
$circ = 2 * 3.14159 * $rayon;
$aire = 3.14159 * $rayon*$rayon;
$cercle = ["$rayon","$diam","$circ","$aire"];
var_dump($cercle);
$T = array(
            "rayon" => $rayon,
            "diametre" => $diam,
            "circ" => $circ,
            "aire" => $aire
        );
var_dump($cercle);
/*
	D. Créez une fonction nommée "slug" qui 
		1. reçoit une chaîne en argument
		2. convertie cette chaîne en minuscule
		3. remplace tous les espaces par des tirets
		4. retourne la chaîne convertie

	Dans la fonction, assurez-vous que l'argument reçu est bel et bien une chaîne. Si non, affichez un message d'erreur avec un echo. 
 */
function slug($chaine){
         
              $chaine=strtolower($chaine);
			   $chaine = str_replace(" ","-",$chaine);
			  	echo($chaine);
                return $chaine;
            }

if($chaine ='is_string'){
        echo "ok";
    }
    else{
        echo "pas conforme";
    }
slug("J'AI BEAUCOUP DE MAL");

 

/*

	QUESTION BONUS

	Récupérer programmatiquement (avec file_get_contents()) les offres d'emploi depuis cette URL : 
	http://feeds.feedburner.com/RJdev

	Affichez en HTML chaque offre d'emploi par son titre et son descriptif, seulement si le mot-clef "PHP" est présent dans le titre ou le descriptif de l'annonce. 
	Le titre doit être cliquable et mener à l'annonce sur remixjobs. 

 */
 ?>