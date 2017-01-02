<?php
/*
//une fonction nommée "copyright" qui affiche l'année actuelle, suivi du symbole copyright suivi du nom de l'entreprise

Le nom de l'entreprise est passé en argument à la fonction

une fonction nommée "birthdateSelect" qui génère et affiche un champ de formulaire HTML <select> avec des <option> pour chaque année
entre 1900 et l'année actuelle. N'oubliez pas l'attribut "value" sur les options.

une fonction nommée "dateToFr" qui convertit une date du format MySQL (2016-11-23 11:04:55) au format français (23-11-2016 11:04:55)
et retourne la date convertie

une fonction nommée "pr" qui aide au débugage. Elle reçoit un tableau en argument, qu'elle affiche avec un print_r dans une balise <pr>
 sur un fond noir. utilisez un police "monospace". placez le style CSS directement dans la balise. Utilisez le typage pour vous assurer de recevoir un tableau en argument.
*/


function copyright ($name)
{
    
    $date = date("Y");
    return "$date &copy $name";
       
}
echo copyright ("bang");


function birthdateSelect()
{
  echo '<select name = "birtdate">';
  for($i = 1900; $i <= date("Y"); $i++){
      echo '<option value =' . $i . '>' . $i . '</option>';
  }
  echo '</select>';
}



function dateToFr($sqlDate)
{
  $tsDate = strtotime($sqlDate);
  $date = date("d-m-Y H:i:s", $tsDate);
  return $date;
}


function pr(array $tab)
{
  echo '<pre style=" color: white; background-color: black ;font-family: monospace">';
  echo print_r($tab);
  echo '</pre>';
}


?>


