<?php
require_once "model/Ator.php";
class AtorController{

    public function req($funcao){

        switch($funcao){
            case "/":
                //$atores = Ator::listarAtores();
                $atores = new Ator();
                $atores = $atores->listarAtores();
                $_REQUEST['atores'] = $atores;

                require_once "view/viewAtor.php";  
            break;

            case "cadastro":
                if($_SERVER['REQUEST_METHOD'] == "GET"){
                    //GET
                    require_once "view/viewCadastroAtor.php";
                }else{
                    //POST

                    $ator = new Ator();
                    $resultado = $ator->criarAtor($_POST['nome'], $_POST['sobrenome']);
                    $_REQUEST['resultado'] = $resultado;
                    require_once "view/viewCadastroAtor.php";
                }
            break;
        }   

}
}
?>