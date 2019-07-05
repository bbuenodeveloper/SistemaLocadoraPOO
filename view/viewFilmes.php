<?php 

$filmes = $_REQUEST['filmes']?$_REQUEST['filmes']:0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Filmes</h1>

    <ul>
        <?php if($filmes): ?>
        <?php foreach($filmes as $filme): ?>
            <li><?php echo $filme->titulo; ?></li>
        <?php endforeach ?>
        <?php else: ?>
            <li>Não existe filmes</li>
        <?php endif ?>

    </ul>
</body>
</html>