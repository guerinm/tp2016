<?php

require_once("connexion.php");
class Chaine extends connexion
{
    private $id;
    private $nom;
    private $adresse;
    private $cp;
    private $ville;
    private $numTel;
    private $numFax;
    
    public function getAllChaine(){
        $sql = "SELECT * FROM chaine";
        
        $stmt= $this->request($sql);
        //var_dump($stmt);die("fucker");
        
        $tabChaines=[];
        while ($row =$stmt->fetch()){
            $chaine = new Chaine();
            $chaine->
        }
        return $tabChaines;
    }

}