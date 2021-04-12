<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$cpfDaniel = new Cpf("123.456.789-10");
$titularDaniel = new Titular($cpfDaniel, "Daniel");

$primeiraConta = new Conta($titularDaniel);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

var_dump($primeiraConta);

$cpfLeonardo = new Cpf("999.999.999-99");
$titularLeonardo = new Titular($cpfLeonardo, "Leonardo");

$segundaConta = new Conta($titularDaniel);
$segundaConta->deposita(1000);
$segundaConta->saca(300);

var_dump($segundaConta);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpf() . PHP_EOL;