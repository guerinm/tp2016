<?php

class Chaine {
    /**************************************attributes*********************************************************/
    private $id;
    private $nom;
    private $adresse;
    private $cp;
    private $ville;
    private $numTel;
    private $numFax;
    /***********************************methodes********************************************************/
    public function hydrate($datas){
        foreach($datas as $key=>$value){

            $isDelete=false;
            $newString='';
            $ii=0;

            while($ii<strlen($key)){
                if($key[$ii]==='_'){
                    $newString .='';
                    $isDelete=true;
                }
                else{
                    if($isDelete =false){
                        $newString .= $key[$ii];
                    }
                    else{
                        $newString .= strtoupper($key[$ii]);
                        $isDelet=false;
                    }
                }
                $ii++;
            }
            $methode = 'set' .ucfirst($newString);
            if(method_exists($this, $methode)){
                $this-> $methode($value);
            }
        }
    }

    /*********************************getters et setters************************************************/
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * @param mixed $numTel
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }

    /**
     * @return mixed
     */
    public function getNumFax()
    {
        return $this->numFax;
    }

    /**
     * @param mixed $numFax
     */
    public function setNumFax($numFax)
    {
        $this->numFax = $numFax;
    }



}
