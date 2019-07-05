<?php
    
$req = key($_GET);

$controller = $req."Controller";

require_once "controller/".$controller.".php";

$solicitacao = new $controller();
$solicitacao->req($_SERVER);


?>