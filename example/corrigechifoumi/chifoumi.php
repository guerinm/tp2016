<?php


$options = '$ ';
  class Partie{
      
  }

  class Application{
    
    private $start = true; // boolean pour déterminer si l'appli tourne ou si on quitte
    
    public function getStart() // getter de "start" appellé comme condition du while
    {
      return $this->start;
    }
        
    public function quitApp($response) // fonction appellée dans la boucle while 
    {
    	if ($response == 2){
     		$this->start = false;  // si la réponse est 2 -> on quitte le programme
     }
  	}
    
    public function lancerJeu($response) // fonction appellée dans la boucle while
    {
      if($response == 1){ // si la réponse est 1, on lance la partie
          $partie = new Partie(); // on créé un objet partie à l'intérieur d'une classe
      }
    }
  }  
// FIN CLASS APPLICATION

// on instancie une nouvelle application
$application = new Application();

// on met dans un tableau les choix possibles à afficher
$choices = [
	"1 - Jouer",
  "2 - Quitter",
	];

while ($application->getStart()) { // boucle tant que start = true
  	//mettre la boucle foreach avant la récupération de la réponse 
    //pour afficher le menu avant de taper quoi que ce soit
    foreach ($choices as $key) { // on affiche le contenu du tableau des choix possibles
        echo $key . PHP_EOL;
      }
    if (PHP_OS == 'WINNT') { // récupération de la réponse sous cmd windows
        echo $options;
        $response = stream_get_line(STDIN, 1024, PHP_EOL);
    } else { // récupération de la réponse sous cmd linux
        $response = readline($options); // on stocke la réponse
    }
    
  	$application->lancerJeu($response); // on lance le jeu
  	$application->quitApp($response); // on quitte l'application (si la réponse est "2")
}
// Fin boucle while
