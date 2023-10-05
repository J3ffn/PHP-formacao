<?php


class Bicicleta
{
    private int $idBicicleta;

    private String $nome;

    private String $descricao;

    private float $preco;

    private String $imagemName;

    public function __construct(int $idBicicleta, string $nome, string $descricao, float $preco, String $imagemName)
    {
        $this->idBicicleta = $idBicicleta;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->imagemName = $imagemName;
    }

    public function getIdBicicleta(): int
    {
        return $this->idBicicleta;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function getImagemName(): string
    {
        return $this->imagemName;
    }

    public function setImagemName(string $imagemName): void
    {
        $this->imagemName = $imagemName;
    }

}