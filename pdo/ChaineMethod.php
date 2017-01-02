<?php

/**
 * Created by PhpStorm.
 * User: r-1
 * Date: 15/12/2016
 * Time: 16:19
 */

require_once("connexion.php");
require_once("Chaine.php");

class ChaineMethod extends Connexion
{

    public function getAllChaine()
    {
        $sql = "SELECT * FROM chaine";

        $stmt = $this->request($sql);
//		var_dump($stmt);die("fucker");
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
            $tabChaines[] = $chaine;
        }
        return $tabChaines;
    }

    public function insert(Chaine $chaine)
    {
        $sql = "INSERT INTO chaine(nom_chaine,
                                    adresse, 
                                    code_postal,
                                    ville, 
                                    telephone,
                                    fax,
                                    payante)
                                VALUES (?,?,?,?,?,?,0)";
        $params=[
            $chaine->getNom(),
            $chaine->getAdresse(),
            $chaine->getCp(), 
            $chaine->getVille(),
            $chaine->getNumTel(),
            $chaine->getNumFax()
        ];
     //   var_dump($params); die('param');
        $this->request($sql, $params);
        header('Location: index.php');

    }
    public function del(Chaine $chaine)
    {
        $sql = "DELETE FROM chaine WHERE chaine_id= ?";
        $params=[$chaine->getId()];
        $this->request($sql,$params);

        header('Location: index.php');
            }

public function getOne()
{
    $sql = "SELECT * FROM chaine WHERE chaine_id= ?";
    $params=[$chaine->getId()];
    $stmt = $this->request($sql,$params);

    $row = $stmt->fetch();
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

    public function update(Chaine $chaine)
    {
        $sql= "UPDATE chaine SET 
              (nom_chaine=? ,
              adresse= ? ,
              code_postal=?,
              ville=? ,
              telephone= ?,
              fax= ?,)
              WHERE chaine_id= ?;"

              
$chaine = new Chaine();
        $chaine->getId()($row['chaine_id']);
        $chaine->setNom($row['nom_chaine']);
        $chaine->setAdresse($row['adresse']);
        $chaine->setCp($row['code_postal']);
        $chaine->setVille($row['ville']);
        $chaine->setNumTel($row['telephone']);
        $chaine->setNumFax($row['fax']);




";
    }

}