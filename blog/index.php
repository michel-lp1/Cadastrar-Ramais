<?php

require 'config.php';
include 'src/Artigo.php';
$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Ramais Krona</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>



<body>
        <div id="container">
            <div class="page-bg"></div>

                <div class="animation-wrapper">
                <div class="particle particle-1"></div>
                <div class="particle particle-2"></div>
                <div class="particle particle-3"></div>
                <div class="particle particle-4"></div>
                </div>

                <div class="page-wrapper"> 
            <h4>Ramais Krona</h4>
        </div>

        <?php foreach ($artigos as $artigo) : ?>
        <h2>
            <a href="artigo.php?id=<?php echo $artigo['id']; ?>">
                <?php echo $artigo['setor']; ?>
            </a>
        </h2>
        <p>
            <?php echo nl2br($artigo['ramal']); ?>
        </p>
        <p>
            <?php echo nl2br($artigo['descricao']); ?>
        </p>
        <hr>
        <?php endforeach; ?>
    </div>
</body>

</html>