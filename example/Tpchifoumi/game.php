

<?php


Class Game  {
    
    private $joueur1;
    
    public function getJoueur1()
    {
        return $this->joueur1;
    }
    
    
    private $joueur1Score = 0;
    
    public function getJoueur1Score()
    
    {
        return $this->joueur1Score;
    }
    
    public function setJoueur1Score($value)
    
    {
        $this->joueur1Score = $value;
    }
    
    
    private $computer;
    
    public function getComputer()
    {
        return $this->computer;
    }
    
    
    private $computerScore = 0;
    
    public function getComputerScore()
    {
        return $this->computerScore;
    }
    
    public function setComputerScore($value)
    {
        $this->computerScore = $value;
    }
    
   /* private $tours;
    
    public function getTours()
    {
        return $this->tours;
    }
    
    private $tourcourant;
    
    public function getTourCourant()
    {
        return $this->tourcourant;
    }
    
    public function TourFini()
    
    {
        return $this->getTourCourant()->tourfini();
    }
    
    
    public function NouveauTour(){
        echo "1 - Tour1 " .PHP_EOL . "2 - Tour2" . PHP_EOL  ."3 - Tour3" .PHP_EOL;
        $tour=true;
        
        if($this->getTourCourant()->tourfini()) {
            $this->tourcourant = new Game();
            $this->tours[] = $this->tourcourant;
        }
    }
    
    public function getTourGagnant() {
        if($this->tourfini() && $this->tourcourant()->estgagnant()) {
            if($this->getTourCourant()->joueur1gagnant()) { return $this->getJoueur1()->getUsername(); }
            else { return $this->getComputer()->getUsername(); }
        } else { return ""; }
    }
    
    
    public function FinDeJeu() {
        return (($this->getJoueur1Score() == 2) || ($this->getComputerScore() == 2));
    }
    
    
    public function GetGagnant() {
        if(($this->getJoueur1Score() == 2)) { return $this->getJoueur1(); }
        else if(($this->getComputerScore() == 2))
        { return $this->getComputer(); }
        else null;
        }
    
    
    public function getNomDuGagnant()
    { return $this->getGagnant()->getUsername(); }
    
    
    
    public function GetPerdant() {
        if(($this->getJoueur1Score() == 2))
        { return $this->getComputer(); }
        else if(($this->getComputerScore() == 2))
        { return $this->getJoueur1(); }
        else null;
        }
    
    
    public function getNomDuPerdant()
    { return $this->getNomDuPerdant()->getUsername(); }
    
    
    public function __construct(Joueur $joueur1, Computer $computer) {
        echo "Nouvelle partie entre $joueur1 et $computer \n";
        $this->joueur1 = $joueur1;
        $this->computer= $computer;
        $this->_id = sprintf("%s_%s", $this->getJoueur1()->getID(), $this->getComputer()->getID());
        
        $this->tours = array();
        $this->tourcourant = new Game();
    }
    
    
    
    public function setChoixDuJoueur($id, $value) {
        var_dump($value);
        echo "setChoixDuJoueur : $value \n";
        // En fonction du joueur
        if($this->getJoueur1()->getConnId() == $id) {
            echo "setChoixDuJoueur pour le joueur 1: $value \n";
            $this->getTourCourant()->setChoixDuJoueur($value);
        }
        else {
            echo "setChoixDuJoueur pour l'ordinateur: $value \n";
            $this->getTourCourant()->setChoixDuJoueur($value);
        }
        // Si le tour est terminé : mise à jour des scores
        if($this->TourFini()) {
            if($this->getTourCourant()->EstGagnant()) {
                if($this->getTourCourant()->Joueur1Gagnant())
                { $this->setJoueur1Score($this->getJoueur1Score() + 1); }
                else { $this->setComputerScore($this->getComputerScore()+1); }
            }
        }
        
    }
    public function getTableau()
    {
        // Tableau par défaut
        $arr =  array("joueur1name" => $this->getJoueur1()->getUsername(),
        "Computername" => $this->getComputer()->getUsername(),
        "Joueur1score" => $this->getJoueur1Score(),
        "Computerscore" => $this->getComputerScore());
        // Si la partie est terminée, ajout d'infos
        if($this->JeuFini()) {
            $arr["fin"] = true;
            $arr["gagnant"] = $this->getNomDuGagnant();
        }
        return $arr;
    }
    
    // Fin de getArray()
    
    
    $joueur1 = new Game();
    $computer = new Game();
    
}