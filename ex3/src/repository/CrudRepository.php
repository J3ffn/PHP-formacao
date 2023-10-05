<?php

namespace repository;

use Bicicleta;

interface CrudRepository
{

    public function buscaTodos(): array;

    public function buscarPeloId(int $idBicicleta): Bicicleta;

    public function deletar(int $idProduto): void;

}