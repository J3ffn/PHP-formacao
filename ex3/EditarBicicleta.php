<?php

    use repository\ProdutoRepositorio;

    require_once "./src/repository/BicicletaRepository.php";
    $bicicletaRepository = new BicicletaRepository();
    $idBicicleta = $_GET["id"];
    $bicicletaBuscada = $bicicletaRepository->buscarPeloId($idBicicleta);

    if (isset($_POST["editar"])) {
        $bicicletaEditada = new Bicicleta(
            $idBicicleta,
            $_POST["nome"],
            $_POST["descricao"],
            $_POST["preco"],
            $bicicletaBuscada->getImagemName()
        );

        $bicicletaRepository->editar($idBicicleta, $bicicletaEditada);

        header("Location: AdminBicicletas.php");
    }

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição - <?= $bicicletaBuscada->getNome() ?></title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<section class="container-form">

    <section class="contato-formulario" aria-label="formulario">
        <form class="form" method="POST">
            <div class="">
                <label for="nome">Novo nome</label>
                <input type="text" id="nome" name="nome" placeholder="Ex: Nimbus" value="<?= $bicicletaBuscada->getNome()?>">
            </div>
            <div class="">
                <label for="preco">Novo preço</label>
                <input type="text" id="preco" name="preco" placeholder="Ex: 4999" value="<?= $bicicletaBuscada->getPreco()?>">
            </div>
            <div class="col-2">
                <label for="descricao">Nova descrição</label>
                <input type="text" id="descricao" name="descricao" placeholder="Ex: Leve comom uma pluma" value="<?= $bicicletaBuscada->getDescricao()?>">
            </div>
            <button class="botao" type="submit" name="editar" value="Editar produto">Editar <?= $bicicletaBuscada->getNome() ?></button>
        </form>
    </section>

</section>



</body>
</html>
