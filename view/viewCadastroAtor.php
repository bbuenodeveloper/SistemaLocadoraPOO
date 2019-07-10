<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
    <form action="index.php?ator/cadastro" method="POST">
        <input type="text" name="nome" id="" placeholder="Nome Ator">
        <input type="text" name="sobrenome" id="" placeholder="Sobrenome Ator">
        <button type="submit">Cadastrar Ator</button>
    </form>
        <?php if(isset($_REQUEST['resultado'])): ?>
            <?php if($_REQUEST['resultado']): ?>
                <h1>Cadastro Concluido com sucesso!</h1>
                <a href="index.php?ator/cadastro">Voltar para Cadastro</a>
            <?php else: ?>
                <h1>Cadastro Invalido!</h1>
            <?php endif ?>
        <?php endif ?>
</body>
</html>