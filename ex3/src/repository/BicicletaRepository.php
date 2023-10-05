<?php

use repository\CrudRepository;

require_once "ConexaoBD.php";
require_once "CrudRepository.php";
require_once "Bicicleta.php";

class BicicletaRepository extends ConexaoBD implements CrudRepository
{
    public function buscaTodos(): array {
        $sql = "select * from bicicleta";

        return $this->executarQuery($sql);
    }

    public function buscarPeloId(int $idBicicleta): Bicicleta
    {
        $sql = "select * from bicicleta where id_bicicleta = $idBicicleta";

        return $this->executarQuery($sql)[0];
    }

    public function editar(int $idBicicleta, Bicicleta $bicicletaEditada): bool {
        $sql = "UPDATE bicicleta set nome = ?, descricao = ?, preco = ?";

        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $bicicletaEditada->getNome());
        $statement->bindValue(2, $bicicletaEditada->getDescricao());
        $statement->bindValue(3, $bicicletaEditada->getPreco());

        return $statement->execute();
    }

    public function deletar(int $idbicicleta): void {
        $sql = "DELETE FROM bicicleta where id_bicicleta = ?";

        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $idbicicleta);

        $statement->execute();
    }

    private function executarQuery(String $sql) : array {
        $statement = $this->pdo->query($sql);
        $dadosBd = $statement->fetchAll(PDO::FETCH_ASSOC);

        return array_map(function ($bicicleta) {
            return $this->formarObjeto($bicicleta);
        }, $dadosBd);
    }

    private function formarObjeto(array $bicicleta): Bicicleta {
        return new Bicicleta(
            $bicicleta["id_bicicleta"],
            $bicicleta["nome"],
            $bicicleta["descricao"],
            $bicicleta["preco"],
            $bicicleta["imagemName"]
        );
    }
}