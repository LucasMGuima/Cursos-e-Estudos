<?php
require_once('src/Conta.php');
require_once('src/Titular.php');
require_once('src/CPF.php');

$primeiraConta = new Conta(new Titular(new CPF('123.456.789-10'), 'Vinicius Dias'));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

$segundaConta = new Conta(new Titular(new CPF('123.456.789-10'), 'Vinicius Dias'));
$terceirasConta = new Conta(new Titular(new CPF('123.456.789-10'), 'Vinicius Dias'));

echo "Numero de contas ". Conta::getNumeroContas() . PHP_EOL;
unset($segundaConta);
echo "Numero de contas ". Conta::getNumeroContas() . PHP_EOL;
?>