<?php 
require_once "conexao.php";
class Filme{

    public function listarFilme(){
        global $db;
        $query = $db->query("SELECT * FROM filme");
        $resultado = $query->fetchAll(PDO::FETCH_CLASS);

        return $resultado;
    }
}


?>