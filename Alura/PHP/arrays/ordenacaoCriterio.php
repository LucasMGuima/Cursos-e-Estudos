<?php
$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];

function ordenaNotas(array $aluno1, array $aluno2) : int{
    if($aluno1['nota'] > $aluno2['nota']){
        return -1;
    }
    if($aluno2['nota'] > $aluno1['nota']){
        return 1;
    }
    return 0;
}

uasort($notas, 'ordenaNotas');
var_dump($notas);
?>