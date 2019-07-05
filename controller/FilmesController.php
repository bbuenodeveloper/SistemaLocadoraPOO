<?php
require_once "model/Filmes.php";
class FilmesController{

    public function req($server){

        switch($server['REQUEST_METHOD']){
            case "GET":
                //$atores = Ator::listarAtores();
                $filmes = new Filme();
                $filmes = $filmes->listarFilme();
                $_REQUEST['filmes'] = $filmes;

                require_once "view/viewFilmes.php";  
            break;

            case "POST":
            break;
        }   

}
}
?>