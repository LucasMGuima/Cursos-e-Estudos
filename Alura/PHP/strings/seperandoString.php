<?php
$nome = 'Vinicius Dias';
$email = 'vinícius@alura.com.br';
$senha = 'áóíù';

echo mb_strlen($senha) . PHP_EOL;
if(mb_strlen($senha) < 8){
    echo 'Senha insegura' . PHP_EOL;
}

$posArroba = strpos($email, "@");
$usuario = substr($email, 0, $posArroba); 

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posArroba+1) . PHP_EOL;

[$nome, $sobrenome] = explode(' ', $nome);
echo 'Nome: ' . $nome . PHP_EOL . 'Sobrenome: ' . $sobrenome . PHP_EOL;
?>