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

//Vai adicionando os arrays no final, não preserva as chaves
echo 'Adicionando no final: ';
$alunos2022 = array_merge($alunos2021, $novosAlunos);
var_dump($alunos2022);
echo 'Juntando as chaves diferentes: ';
var_dump($alunos2021 + $novosAlunos);
echo 'Desemapcotando um array: ';
var_dump([...$alunos2021, 'Lucas', ...$novosAlunos]); 
?>