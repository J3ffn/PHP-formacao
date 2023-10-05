<?php

    use repository\ProdutoRepositorio;

    require_once "./src/repository/BicicletaRepository.php";
    $bicicletaRepository = new BicicletaRepository();
    $bicicleta = $_POST["id"];

    if(isset($bicicleta)) {
        $bicicletaRepository->deletar($bicicleta);
        header("Location: AdminBicicletas.php");
    }
