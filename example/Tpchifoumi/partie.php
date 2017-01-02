<?php
Class Partie
{
    
    
    public function Choixoption ()
    {
        echo "1 - Pierre " .PHP_EOL . "2 - Feuille" . PHP_EOL . "3 - Ciseaux" . PHP_EOL;
        $jeu = true;
        while ($jeu){
            
            if (PHP_OS == 'WINNT') {
                $response = stream_get_line(STDIN, 1024, PHP_EOL);
            }
            else {
                $response = readline($options);
            }
            
            if (!empty ($response)){
                $jeu=false;
            }
            
            if ($response==1){
                echo "Pierre";
            }
            
            if ($response==2){
                echo " Feuille";
            }
            if  ($response ==3){
                echo "Ciseaux";
            }
            
            
        }
        
        
    }
}
Class Joueur
{
    private $humain;
    private $computer;
    private $value;
    private $score = 0;
    
    public function getScore()
    
    {
        return $this->score;
    }
    
    public function setScore($value)
    
    {
        $this->score = $value;
    }
    
    public function setChoixDuJoueur($humain, $computer) {
        var_dump($humain, $computer);
        echo "setChoixDuJoueur : $value \n";
        // En fonction du joueur
        
    }
    
}

$computer = new Joueur;
$humain = new Joueur;
$partie = new Partie;

?>