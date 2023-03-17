<?php

require 'config.php';
require 'src/Artigo.php';

$obj_artigo = new Artigo($mysql);
$artigo = $obj_artigo->encontrarPorId($_GET['id']);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Ramais Krona</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<style>
    body {
  background-image: linear-gradient(to right, rgb(3, 48, 70), #c1c1c1);
  font-family: Verdana, Helvetica, Arial;
  font-size: 14px;
}
</style>

<body>
    <div id="container">
        <h1>
            <?php echo $artigo['setor']; ?>
        </h1>
        <p>
            <?php echo $artigo['ramal']; ?>
        </p>
        <p>
            <?php echo $artigo['descricao']; ?>
        </p>
        <div>
            <a class="botao botao-block" href="index.php">Voltar</a>
        </div>
    </div>
</body>

</html>