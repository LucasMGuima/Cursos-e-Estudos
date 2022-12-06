<?php
$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria'  
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

$alunos2022 = [...$alunos2021, ...$novosAlunos];

echo 'Adiciona mais de uma elemento ao final do array: ';
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
var_dump($alunos2022);
echo 'Adicionando um unico elemento: ';
$alunos2022[] = 'Luiz';
var_dump($alunos2022);
echo 'Adiciona elementos no começo: ';
array_unshift($alunos2022, 'Stephane', 'Rafaela');
var_dump($alunos2022);
echo 'Remove o primeiro elemento: ';
echo array_shift($alunos2022);
echo PHP_EOL . 'Remove o ultimo elemento: ';
echo array_pop($alunos2022);
?>