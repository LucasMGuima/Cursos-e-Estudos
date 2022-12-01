<?php
$notas = [
    'Vinicius' => null,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

if(is_array($notas)){
    echo 'Sim, é um array' . PHP_EOL;
}

//null representa que não fez a prova
echo 'Vinicius fez a prova: ' . PHP_EOL;
echo 'key_exists: ';
var_dump(key_exists('Vinicius', $notas)); // checa so se existe a chave
echo 'isset: ';
var_dump(isset($notas['Vinicius'])); // checa se existe e se o valor é diferente de null
echo 'Alguém tirou 10?'.PHP_EOL;
var_dump(in_array(10, $notas)); // checa se existe esse númro no array
echo 'Quem tirou 10?'.PHP_EOL;
echo array_search(10, $notas); // procura pela chave que possui o valor entrado
?>