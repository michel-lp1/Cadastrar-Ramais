<?php

require '../config.php';
include '../src/Artigo.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $artigo = new Artigo($mysql);
    $artigo->remover($_POST['id']);

    redireciona('/blog/admin/index.php');
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta charset="UTF-8"> 

</head>

<body>
    <div id="container">
        <h4>Excluir Ramal</h4>
        <h1>Você realmente deseja excluir o ramal?</h1>
        <form method="post" action="excluir-artigo.php">
            <p>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                <button class="botao">Excluir</button>

            </p>
        </form>
    </div>
</body>

</html>