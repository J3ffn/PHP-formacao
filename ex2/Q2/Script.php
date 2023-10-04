<?php

use Q2\Cardapio;
use Q2\Comida;

require_once "./Cardapio.php";
require_once "./Comida.php";

    $cardapio = Cardapio::getInstance();


    $cardapio->addComida("entrada", new \Q2\Comida("Salada Caesar"));
    $cardapio->addComida("prato_principal", new \Q2\Comida("Bife à Milanesa"));
    $cardapio->addComida("acompanhamento", new \Q2\Comida("Arroz Branco"));
    $cardapio->addComida("sobremesa", new \Q2\Comida("Mousse de Chocolate"));
    $cardapio->addComida("bebida", new \Q2\Comida("Refrigerante"));

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Cardápio</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <main class="main-bg">
        <div class="cardapio-container">
            <ul style="margin-left: 10px;">

                <h1>Cardápio de hoje:</h1>
                <?php foreach ($cardapio->getComidas() as $chave => $valor) { ?>

                    <h2 style="margin-left: 20px"><?="$chave: $valor"?></h2>

                <?php } ?>
            </ul>
        </div>
    </main>

</body>
</html>
