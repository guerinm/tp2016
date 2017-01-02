<?php

/**
 * Created by PhpStorm.
 * User: r-1
 * Date: 15/12/2016
 * Time: 16:19
 */

require_once("Connexion.php");
require_once ("Chaine.php");
class ChaineMethod extends Connexion
{

    public function getAllChaine(){
        $sql = "SELECT * FROM chaine";

        $stmt = $this->request($sql);
//		var_dump($stmt);die("GEt ALL");
        $tabChaines = [];
        while ($row = $stmt->fetch()) {
            $chaine = new Chaine();
            $chaine->setId($row['chaine_id']);
            $chaine->setNom($row['nom_chaine']);
            $chaine->setAdresse($row['adresse']);
            $chaine->setCp($row['code_postal']);
            $chaine->setVille($row['ville']);
            $chaine->setNumTel($row['telephone']);
            $chaine->setNumFax($row['fax']);
            $tabChaines[]= $chaine;
        }
        return $tabChaines;
    }

    /**
     * donne une chaine en fonction d'un ID passé en parametre
     * @param Chaine $chaine
     * @return Chaine
     */
    public function getOneChaine(Chaine $chaine){
        $sql = "SELECT * FROM chaine WHERE chaine_id = ?";
        $params = [$chaine->getId()];
        $stmt = $this->request($sql,$params);
//		var_dump($stmt);die("GEt ALL");
        $row = $stmt->fetch() ;
        $chaine = new Chaine();
        $chaine->setId($row['chaine_id']);
        $chaine->setNom($row['nom_chaine']);
        $chaine->setAdresse($row['adresse']);
        $chaine->setCp($row['code_postal']);
        $chaine->setVille($row['ville']);
        $chaine->setNumTel($row['telephone']);
        $chaine->setNumFax($row['fax']);
        return $chaine;
   }

    public function insert(Chaine $chaine){
        $sql = "INSERT INTO chaine(nom_chaine,
                                    adresse,
                                    code_postal,
                                    ville,
                                    telephone,
                                    fax,
                                    payante) 
                                    VALUES (?,?,?,?,?,?,0);";
        $params =[
            $chaine->getNom(),
            $chaine->getAdresse(),
            $chaine->getCp(),
            $chaine->getVille(),
            $chaine->getNumTel(),
            $chaine->getNumFax()
        ];
        $this->request($sql,$params);
        header('Location: index.php');
    }
    public function update(Chaine $chaine){
        $sql = "UPDATE chaine SET 
                      nom_chaine=? , 
                      adresse=?, 
                      code_postal=?, 
                      ville=?, 
                      telephone=?, 
                      fax=?
                  WHERE chaine_id = ?;";
        $params =[
            $chaine->getNom(),
            $chaine->getAdresse(),
            $chaine->getCp(),
            $chaine->getVille(),
            $chaine->getNumTel(),
            $chaine->getNumFax(),
            $chaine->getId()
        ];
        $this->request($sql,$params);
        header('Location: index.php');
    }

    public function delete(Chaine $chaine){
//        $sql = "DELETE FROM chaine WHERE chaine_id = $chaine->getId()";
        $sql = "DELETE FROM chaine WHERE chaine_id = ?";
        $params = [$chaine->getId()];
        $this->request($sql,$params);
 //       $this->request($sql);
        header('Location: index.php');
    }

}