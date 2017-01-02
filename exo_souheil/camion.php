<!DOCTYPE html>
<html>

<body>
  <table>
    <?php

/*poids max =  9000
poids sac = 45
nb sac max = 200
saisie utilisateur du poids = variables poids total
1) Variable nombre de sacs total = poids total /poids sac
2) nombre camion = nombre sac total/ nombre sac max
3)reste sac = nb sac total % nb camion
4) affichage
*/
//$poidsmax=  9000;


//ALT SHIFT F pour formater le code
$poidsSac = 45;
$nbSacMax = 200;
$poidsTotalDansUnCamion = $poidsSac*$nbSacMax;

$poidsDemande = $_GET["poids"];

$nbCamionsPlein = floor ($poidsDemande / $poidsTotalDansUnCamion);

//on affiche les camions pleins
$ii = 1;
for($ii = 1; $ii<=$nbCamionsPlein; $ii++){
    echo '<tr>';
    echo "<td <p>camion n° $ii </p></td>";
    echo "<td bgcolor='green' width='50px' height='30px'></td>";
    echo "<td <p>Nb de sacs: $nbSacMax </p></td>";
    echo "<td <p>poids $poidsTotalDansUnCamion </p></td>";
    echo "</tr>";
}

//y a t'il un camion pas plein ?'
$resteACharger = $poidsDemande % $poidsTotalDansUnCamion;
if ($resteACharger >0){
    //il faut un autre camion
    echo '<tr>';
    echo "<td <p>camion n° $ii </p></td>";
    if ($resteACharger < $poidsTotalDansUnCamion/2){
        $couleur="red";
    }else{
        $couleur="yellow";
    }
    echo "<td bgcolor='$couleur' width='50px' height='30px'></td>";
    
    $nbSacQuiReste = ceil($resteACharger/$poidsSac);
    echo "<td <p>Nb de sacs: $nbSacQuiReste </p></td>";
    echo "<td <p>poids $resteACharger </p></td>";
    echo "</tr>";
    
}else{
    //il ne faut pas un autre camion
}








//$poidstotal= 97650;

//$nbsactotal = 428.25;
//$nbcamion = 10.85;
/*$rest = $nbsactotal% $nbsacmax;
for($ii=1; $ii<=11; $ii++){
echo '<tr>';


if($ii<=9000){
echo ' <td <p>camion n° .$ii. </p></td>';
echo'  <td bgcolor="green" width="50px" height="30px"></td>';
echo ' <td <p>"Nb de sacs:" .$nbsacmax. </p></td>';
echo '<td <p>"poids" . $nbsacmax . </p></td>';
}
else {
echo ' <td <p>camion n° .$ii. </p></td>';
echo' <td bgcolor="yellow" width="50px" height="30px"></td>';
}

}
echo '</tr>';*/
?>

  </table>
</body>

</html>