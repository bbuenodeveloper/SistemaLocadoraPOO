<?php 
require_once "conexao.php";
class Ator{

    public function listarAtores(){
        global $db;
        $query = $db->query("SELECT * FROM ator");
        $resultado = $query->fetchAll(PDO::FETCH_CLASS);

        return $resultado;
    }
}


?>