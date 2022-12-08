<?php
require_once('src/Conta.php');
require_once('src/Endereco.php');
require_once('src/Titular.php');
require_once('src/CPF.php');

$endereco = new Endereco('Petropolis', 'bairro', 'rua', '43');

$primeiraConta = new Conta(new Titular(new CPF('123.456.789-10'), 'Dias', $endereco));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
?>