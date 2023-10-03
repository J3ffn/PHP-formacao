<?php

// 03
function listarBancosCondicional()
{
  global $bancos;
  if (sizeof($bancos)) {
    return listarVetor($bancos);
  }
  echo PHP_EOL . "Desculpe, não foi possível encontrar nenhum banco cadastrado." . PHP_EOL;
};

listarBancosCondicional();

$bancos = [];

listarBancosCondicional();
