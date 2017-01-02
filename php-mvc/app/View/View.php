<?php
//on est dans le dossier View;
namespace View;

class View
{

    //statique juste pour qu'on puisse l'appeler en une seule ligne:)
    //reçoit le nom de la page à inclure (avec ou sans extensions)
    public static function show($page, $title, array $vars = null)
    {
        if(!empty($vars)){
            //on extrait les données
            //LES CLES servent ici de NOM AUX VARIABLES CREEES
            extract($vars);
        }

        $page= str_replace(".php", "", $page);

        include("app/templates/base.php");

    }

}