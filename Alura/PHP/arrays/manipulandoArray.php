<?php
$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
    'Maria' => 10
];

echo 'Compara considerando apenas os valores';
var_dump(array_diff($notasBimestre1, $notasBimestre2));
echo 'Compara considerando apenas as chaves';
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));
echo 'Compara considerano as chaves-valores';
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));
echo 'Mostrar apenas as chaves';
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes));
echo 'Inverter o chave<->valor';
var_dump(array_flip($alunosFaltantes));
?>