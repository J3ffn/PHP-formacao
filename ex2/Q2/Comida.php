<?php

namespace Q2;

class Comida
{
    private ?String $nome = null;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function __destruct()
    {
        $this->nome = null;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function __toString(): string
    {
        return $this->nome;
    }
}