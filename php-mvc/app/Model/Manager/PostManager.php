<?php
namespace Model\Manager;
use Model\Db;

Class PostManager
{

    //delete, create, update, delete

//récupère toutes les données de la table



public function findAll()
{

    $sql= "SELECT id, title, content, image, dateCreated FROM posts";
    $dbh= Db::getDbh();

    $stmt= $dbh->prepare($sql);
    $stmt->execute();
    $results= $stmt->fetchAll(\PDO::FETCH_CLASS, '\Model\Entity\Post');
    return $results;
}

   public function create(Post $post)
   {
       $sql= "INSERT INTO  posts (title, content, dateCreated) VALUES (:title, :content,NOW())";

       $dbh= Db::getDbh();
       $stmt= $dbh->prepare($sql);
       $stmt->bindValue(":title", $post->getTitle());
       $stmt->bindValue(":content", $post->getContent());
       $stmt->bindValue(":image", $post->getImage());
       return $stmt->execute();



   }


   public function findOneById( $id)
   {
       $sql= "SELECT id, title, content, dateCreated FROM posts WHERE id= :id";

       $dbh= Db::getDbh();

       $stmt= $dbh->prepare($sql);

       $stmt->bindValue(":id", $id);//donne une valeur au paramètre

       $stmt->execute();
       $result= $stmt->fetchObject('\Model\Entity\Post');
       return $result;

   }
}
