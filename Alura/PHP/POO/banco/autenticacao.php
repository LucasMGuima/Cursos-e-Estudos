<?php
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Servico\Autenticador;

require_once('src\autoload.php');

$autenticador = new Autenticador();
$diretor = new Diretor(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$autenticador->tentaLogin($diretor, '1234');
?>