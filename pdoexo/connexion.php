<?php
class Connexion{
	
    private function connexionDb()
    {
        $host = "127.0.0.1";
        $port = 3306;
        $db = "tele";
        $user = "root";
        $pwd = "root";
        try {
            $pdo = new PDO("mysql:host=" . $host .
                ";port=" . $port .
                ";dbname=" . $db, $user,$pwd,
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)
            );
            return $pdo;
        }catch (PDOException $e) {
            echo "vous avez une erreur PDO : ".$e->getMessage();
            return null;
        } 
        catch (Exception $e) {
            echo "vous avez une erreur non definie : ".$e->getMessage();
            return null;
        }
    }
    public function request($sql){
        $pdo = $this->connexionDb();
        $stmt = $pdo->query($sql);
        return $stmt;
    }
}