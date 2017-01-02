<?php
namespace Controller;

use Controller\DefaultController;
class Dispatcher

{
    //reçoit la liste des routes, et le paramètre p en argument
    public function dispatch($routes, $p)
    {
        // crée une instance du contrôleur
        $controller = new DefaultController();

        //on trouve la route à appeler
        //on trouve la route à appeler en fonction de ce qu'il y a dans l'URL
        foreach ($routes as $url => $method) {
            if ($url == $p){
                //crée une instance du contrôleur

                //appelle la méthode associée (définie dans des routes.php)
               return call_user_func([$controller, $method]);

            }
        }
        //si on est arrivé ici... 404. La route n'a pas été trouvée
         return call_user_func([$controller, "error404"]);
    }
}
