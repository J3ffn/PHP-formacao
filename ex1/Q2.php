<?php

require_once("./Q1.php");
require_once("./utilizades.php");

// 02.a
listarVetor($bancos);

// 02.b

adicionarALista(
  $bancos,
  "8888",
  [
    "nome" => "Banco 5",
    "cidade" => "Cachoeirinha",
    "estado" => "Rio Grande do Sul"
  ]
);

// 02.c
removerBanco($bancos, "4444");
echo "PHP_EOL" . PHP_EOL;
listarVetor($bancos);

// 02.d
editarValor($bancos, "7777", "estado",  "Rio Grande do Sul");
removerBanco($bancos, "4444");
echo "PHP_EOL" . PHP_EOL;
listarVetor($bancos);
