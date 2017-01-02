<?php
require 'autoload.php';
Class Application
{
    
    
    public function demarrerPartie($partie){
        
        $start=true;

        while ($start){
            echo "1 - Jouer " .PHP_EOL . "2 - Quitter l'application" . PHP_EOL;
            
            
            if (PHP_OS == 'WINNT') {
                $response = stream_get_line(STDIN, 1024, PHP_EOL);
            }
            else {
                $response = readline($options);
            }
            
            if (!empty ($response)){
                $start=false;
            }
            
            if ($response==1){
                echo "choisis ton outil" . PHP_EOL;
                return $partie->Choixoption();  
            }
            
            if ($response==2){
                exit();
                
            }
        }
    }
    
}

$partie = new Partie();

$application = new Application;
$application -> demarrerPartie($partie);
?>