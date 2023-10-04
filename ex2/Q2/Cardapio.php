<?php

namespace Q2;

require_once "./Comida.php";

class Cardapio
{

    private array $comidas;

    private static ?Cardapio $cardapio = null;

    private function __construct() {
        $this->comidas = [];
    }

    private function __clone()
    {
    }

    public static function getInstance(): Cardapio
    {
        if (self::$cardapio == null) {
            self::$cardapio = new self;
        }

        return self::$cardapio;
    }

    public function getComidas(): array
    {
        return $this->comidas;
    }

    public function addComida(String $categoria, Comida $comida) : void {
        if (key_exists($categoria, $this->comidas) || array_search($comida->getNome(), $this->comidas)) {
            echo "Não foi possível adicionar comida ao cardápio.";
            return;
        }

        $this->comidas[$categoria] = $comida;
    }

}