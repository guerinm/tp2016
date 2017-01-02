<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2>
        
        <p>
            Cette ligne a été écrite entièrement en HTML.<br />
            <?php 
            function ditCoucou($nom, $age){
                echo ("<br/>coucou ".$nom."<br/>");
                echo "bonjour, j'ai ".$age." ans<br/>";
                $age=$age+1;
                echo "l'an  prochain j'aurais ".$age." ans<br/>";
                return $age;
            }
            


            $age1 = 3;
            $age1= ditCoucou("zanzan", $age1);
            
            echo "age =".$age1."<br/>";
            //echo "Celle-ci a été écrite entièrement en PHP."; 
            for ($i=0; $i < 10; $i++) { 
                    if($i%2==0){
                        echo  $i."->je suis un nombre pair<br/>";
                    } 
                    else {
                        //echo "<br/> je suis impair(méable)";
                    }
            }
            echo ("<br/>boucle terminée");
            //ditCoucou("gros chat");

            
            
            ?>
        </p>
    </body>
</html>