<?php

$menu = array(
    "entrada" => "Salada Caesar",
    "prato_principal" => "Bife à Milanesa",
    "acompanhamento" => "Arroz Branco",
    "sobremesa" => "Mousse de Chocolate",
    "bebida" => "Refrigerante",
);

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cardápio</title>
</head>
<body>

<h1>Cardápio de hoje:</h1>
    <?php foreach ($menu as $chave => $valor) { ?>

        <h2><?="$chave: $valor"?></h2>

    <?php } ?>
</body>
</html>
