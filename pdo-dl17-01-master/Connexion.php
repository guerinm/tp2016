<?php
class Connexion{
	
    private function connexionDb()
    {
        $host = "127.0.0.1";
        $port = 3306;
        $db = "tele";
        $user = "root";
        $pwd = "";
        try {
            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $user,$pwd,
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)
            );
            return $pdo;
        }
        catch (PDOException $e) {
            echo "vous avez une erreur PDO : ".$e->getMessage();
            return null;
        } 
        catch (Exception $e) {
            echo "vous avez une erreur non definie : ".$e->getMessage();
            return null;
        }
    }

    public function request($sql,$params = null){
        $pdo = $this->connexionDb();
        if($params===null){
            $stmt = $pdo->query($sql);
            return $stmt;
        }else{
            try {
                $stmt = $pdo->prepare($sql);
                /*for ($ii = 0; $ii < count($params); $ii++) {
                    $stmt->bindParam($ii + 1, $params[$ii]);
                }*/
                $stmt->execute($params);
            }
            catch (PDOException $e) {
                echo "vous avez une erreur PDO : ".$e->getMessage();
                return null;
            }
            catch (Exception $e) {
                echo "vous avez une erreur non definie : ".$e->getMessage();
                return null;
            }
            return $stmt;

        }

    }
    
}