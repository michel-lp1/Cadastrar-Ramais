<?php

require '../config.php';
require '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->adicionar($_POST['setor'], $_POST['ramal'], $_POST['descricao']);

    redireciona('/blog/admin/index.php');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="UTF-8">
    <title>Adicionar Ramal</title>
</head>

<body>
    <div id="container">
        <h1>Adicionar Ramal</h1>
        <form action="adicionar-artigo.php" method="POST">
            <p>
                <label for="">Digite o nome do setor</label>
                <input class="campo-form" type="text" name="setor" id="setor" />
 
            </p>
            <p>
                <label for="">Digite o ramal</label>
                <textarea class="campo-form" type="text" name="ramal" id="ramal"></textarea>
            </p>
            <p>
                <label for="">Digite uma descrição</label>
                <textarea class="campo-form" type="text" name="descricao" id="descricao"></textarea>
            </p>
            <p>
                <button class="botao">Cadastrar Ramal</button>
            </p>
        </form>
    </div>
</body>

</html>