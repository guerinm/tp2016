<?php

namespace Model\Entity;

class Post
{
  private $id;
    private $title;
    private $content;
    private $image;
    private $dateCreated;
    
    private $validationErrors =[];

    public function isValid()
    {
        $isValid =true;

        if (empty($this->title)){
            $isValid=false;
            $this->validationErrors[] = "Veuillez renseigner un titre!";
        }
        if (strlen($this->title)>255) {
            $isValid = false;
            $this->validationErrors[] = "Votre titre est trop long !";
        }
        if (empty($this->content)){
            $isValid=false;
            $this->validationErrors[] = "Veuillez renseigner un contenu!";
        }
        if (strlen($this->content)<10) {
            $isValid = false;
            $this->validationErrors[] = "Votre contenu est trop court !";
        }

        return $isValid;
    }
    //getter pour les erreurs de validation
    public function getValidationErrors()
    {
        return $this->validationErrors;

    }

    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($title)
    {
        $this->title = $title;
    }


    public function getContent()
    {
        return $this->content;
    }


    public function setContent($content)
    {
        $this->content = $content;
    }


    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
    
    public function getDateCreated()
    {
        return $this->dateCreated;
    }


    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    }
    
    //id, title, content, dateCreated

}
