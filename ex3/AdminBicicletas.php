<?php
global $pdo;

require_once "./src/repository/BicicletaRepository.php";

$bicicletaRepository = new BicicletaRepository();

$resultado = $bicicletaRepository->buscaTodos();

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bikcraft - Administração</title>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="admin">

    <main class="main-bg">
        <div class="lista-bicicletas">
       <?php foreach ($resultado as $item) { ?>
               <div class="bicicleta-container">
                   <div class="img-container">
                       <img class="img" src="./img/bicicletas/<?= $item->getImagemName()?>">
                   </div>
                    <div class="info-bicicletas">
                        <h3 class="font-1-xl"><?= $item->getNome()?></h3>
                        <span class="font-2-m cor-8">R$ <?= $item->getPreco()?></span>
                        <p class="font-2-s cor-8">Descricao: <?= $item->getDescricao()?></p>
                        <p class="footer-copy font-2-m cor-6">Imagem: <?= $item->getImagemName()?></p>
                    </div>
                   <div  class="edicao-bicicleta" >
                       <form action="EditarBicicleta.php" method="GET">
                           <input type="hidden" name="id" value=<?=$item->getIdBicicleta()?>>
                           <input type="submit" class="botao" value="Editar">
                       </form>
                       <form action="DeleteBicicleta.php" method="POST">
                            <input type="hidden" name="id" value=<?=$item->getIdBicicleta()?>>
                            <input type="submit" class="botao" value="Excluir">
                        </form>

                   </div>
               </div>
        <?php } ?>
        </div>
    </main>

</body>
</html>