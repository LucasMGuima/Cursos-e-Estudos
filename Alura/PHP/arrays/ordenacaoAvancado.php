<?php
$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

//Ordena decrescente
$notasDecre = $notas;
rsort($notasDecre);

//Ordena e mantem a chave
$notasMant = $notas;
asort($notasMant);

//Ordena pela chave
$notasChav = $notas;
ksort($notasChav);

echo 'Ordem Decrescente:';
var_dump($notasDecre);

echo 'Ordem Mantendo a Chave:';
var_dump($notasMant);

echo 'Ordem Pela Chave:';
var_dump($notasChav);
?>