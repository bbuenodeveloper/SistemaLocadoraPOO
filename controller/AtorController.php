<?php
require_once "model/Ator.php";
class AtorController{

    public function req($server){

        switch($server['REQUEST_METHOD']){
            case "GET":
                //$atores = Ator::listarAtores();
                $atores = new Ator();
                $atores = $atores->listarAtores();
                $_REQUEST['atores'] = $atores;

                require_once "view/viewAtor.php";  
            break;

            case "POST":
            break;
        }   

}
}
?>