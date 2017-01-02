<?php

namespace Model;
//design pattern du singleton
use\PDO;
use\PDOException;

class Db
{
private static $dbh;
    public static function getDbh()
    {
        //si on n'est pas encore connecté...
        if(!self::$dbh){
            //on se connecte et on donne une valeur à $sdbh
            self::connect();
        }
        //on retourne à la connexion
        return self ::$dbh;
    }
    private static function connect()
    {

	try {
        //connexion à la base avec la classe PDO et le dsn
        self ::$dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS, [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", //on s'assure de communiquer en utf8
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //on récupère nos données en array associatif par défaut
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING         //on affiche les erreurs. À modifier en prod.
        ]);
    } catch (PDOException $e) { //attrappe les éventuelles erreurs de connexion
        echo 'Erreur de connexion : ' . $e->getMessage();
    }
    }
}