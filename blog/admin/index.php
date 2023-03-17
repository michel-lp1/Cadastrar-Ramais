<?php

require '../config.php';
include '../src/Artigo.php';

$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
            <h4>Página Administrativa</h4>
        </div>
        <div>
            <?php foreach ($artigos as $art) { ?>
            <div id="artigo-admin">
                <p><?php echo $art['setor']; ?></p>
                <p><?php echo $art['ramal']; ?></p>
                <p><?php echo $art['descricao']; ?></p>
                <nav>
                    <a class="botao" href="editar-artigo.php?id=<?php echo $art['id']; ?>">Editar</a>
                    <a class="botao" href="excluir-artigo.php?id=<?php echo $art['id']; ?>">Excluir</a>
                </nav>
            </div>
            <?php } ?>
        </div>
        <a class="botao botao-block" href="adicionar-artigo.php">Adicionar Ramal</a>
    </div>
</body>

</html>