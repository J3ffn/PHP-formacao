<?php

function listarVetor(array &$bancos)
{
  foreach ($bancos as $chave => $valor) {
    echo $chave;
    foreach ($valor as $chaveInterna => $valorAsossiativo) {
      echo  ", " . $valorAsossiativo;
    }
    echo PHP_EOL;
  }
};

function adicionarALista(array &$bancos, String $numeroAgencia, array $banco)
{
  $bancos[$numeroAgencia] = $banco;
};

function editarValor(array &$bancos, String $numeroAgencia, String $campoAlteracao, $valorAlteracao)
{
  $bancos[$numeroAgencia][$campoAlteracao] = $valorAlteracao;
};

function removerBanco(array &$bancos, String $numeroAgencia)
{
  unset($bancos[$numeroAgencia]);
};
