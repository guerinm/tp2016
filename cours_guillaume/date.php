<?php

$birthday = strotime("1982-04-16");
$ageInSeconds = time() - $birthday;
$ageInMinutes =$ageInSeconds / 60;
$ageInHours = $ageInMinutes /60;
$ageInDays = $ageInhours /24;

echo floor($ageIndays) . "jours";
echo'<br>';

echo date("d/m/Y à H:i:s");

//dans le php.ini, régler date.timezone comme ça :
//date.timezone = Europe/Paris

echo '<br>';
//temps unix actuel
//time();

//temps unix basé sur une chaine ou une date format anglais
echo strtotime("1982/04/11 18:25:00");



mktime(18, 25, 0, 04, 11, 1982);
    



?>
