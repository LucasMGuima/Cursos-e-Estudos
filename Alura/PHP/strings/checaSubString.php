<?php
$nome = 'Vinicius Dias';
$familia = str_contains($nome, 'Dias');
if($familia){
    echo "$nome é da familia." . PHP_EOL;
}else{
    echo "$nome não é da familia." . PHP_EOL;
}
?>