<?php
namespace Controller;

use View\View; // on peut donc utiliser juste comme View plus bas
use Model\Manager\PostManager;

class DefaultController
{
    public function home()
    {
        $postManager = new PostManager();
        $posts = $postManager->findAll();
        if (empty($posts)) {
            return $this->error404();
        }

        //var_dump($posts);

        View::show("home", "Blog | Accueil", ["posts" => $posts]);
    }

    public function faq()
    {

        View::show("faq", " Blog | Foire aux questions");
    }

    public function contact()
    {
        View::show("contact", "Blog | Contact");
    }

    public function error404()
    {
        //envoie une entête 404 pour notifier les cliens que ça a foiré
        header("HTTP/1.0 404 Not Found");
        View::show("error/404.php", "Oups ! Perdu ?");
    }

    public function postDetails()
    {
        //crée une instance du manager
        $postManager = new PostManager();

        //crée le post dont l'id est dans l'URl
        $id = $_GET['id'];
        $post = $postManager->findOneById($id);

        //affiche la vue en lui passant le post
        View::show("postDetails", $post->getTitle(), ["post" => $post]);
    }

    public function createPost()
    {
        //crée une nouvelle instance d'articles
        $post = new \Model\Entity\Post();
        //si le formulaire est soumis
        if (!empty($_POST)) {


            //les infos sur l'image sont dans $_FILES
            var_dump($_FILES);
            //validation du fichier uploadé
            if ($_FILES['image']['error'] != 4) {
                //type mime
                $file = $_FILES['image']['tmp_name'];
                $info = finfo_open(FILEINFO_MIME_TYPE);
                $mime = finfo_file($info, $file);
                finfo_close($info);
                echo $mime;

                $uploadError = null;

                if (substr($mime, 0, 5) != "image") {
                    $uploadError = "MimeType invalide";
                }

                //image/jpg image/png image/gif
                //taille
                if ($_FILES['image'] ['size'] > 1000000) {
                    $uploadError = "Fichier trop lourd";
                }
                //verifier les erreurs d'upload
                if ($_FILES['image']['error'] !== 0) {
                    $uploadError = "Une erreur est survenue";
                }
                //si on a pas d'erreur...
                if($uploadError== null) {
                    //si ok, on déplace/redimensionne/convertit jpg
                    $img = new \abeautifulsite\SimpleImage($file);
                    $destination= uniqid() . ".jpg";
                    $img->best_fit(300, 300)
                        ->desaturate()->save(UPLOAD_DIR . uniqid() . $destination);
                    //on hydrate la propriété dans l'objet
                    $post->setImage($destination);
                }
                //hydrate l'instance à partir des données du form
                $post->setTitle($_POST['title']);
                $post->setContent($_POST['content']);
                //declenche la validation de l'article

                if ($post->isValid()) {

                    //demande au manager de sauvegarder l'instance
                    $postManager = new PostManager();
                    $postManager->create($post);
                }

            }
        }
        View::show("post_create", "Blog | Ajouter un nouvel article", ["post" => $post]);
    }


}