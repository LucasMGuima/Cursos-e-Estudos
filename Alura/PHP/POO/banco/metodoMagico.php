<?php
use Alura\Banco\Modelo\Endereco;
require_once('src\autoload.php');
$endereco = new Endereco("São Paulo", 'Bairro ai', 'Rua la', '321');

echo $endereco . PHP_EOL;
echo $endereco->bairro . PHP_EOL;
echo $endereco->rua;
?>