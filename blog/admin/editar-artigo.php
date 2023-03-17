<?php

require '../config.php';
include '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->editar($_POST['id'], $_POST['setor'], $_POST['ramal'], $_POST['descricao']);

    redireciona('/blog/admin/index.php');
}

$artigo = new Artigo($mysql);
$art = $artigo->encontrarPorId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="UTF-8">
</head>

<body>
    <div id="container">
        <h4>Editar Ramal</h4>
        <form action="editar-artigo.php" method="post">
            <p>
                <label for="setor">Digite o nome do setor</label>
                <input class="campo-form" type="text" name="setor" id="setor" value="<?php echo $art['setor']; ?>" />
            </p>
            <p>
                <label for="ramal">Digite o ramal</label>
                <textarea class="campo-form" type="text" name="ramal" id="ramal"><?php echo $art['ramal']; ?></textarea>
            </p>
            <p>
                <label for="descricao">Digite a descrição</label>
                <textarea class="campo-form" type="text" name="descricao" id="descricao"><?php echo $art['descricao']; ?></textarea>
            </p>
            <p>
                <input type="hidden" name="id" value="<?php echo $art['id']; ?>" />
            </p>
            <p>
                <button class="botao">Editar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>