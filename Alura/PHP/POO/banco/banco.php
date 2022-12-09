<?php
require_once('src/autoload.php');

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$endereco = new Endereco('Petropolis', 'bairro', 'rua', '43');

$primeiraConta = new Conta(new Titular(new CPF('123.456.789-10'), 'Dias', $endereco));
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
?>