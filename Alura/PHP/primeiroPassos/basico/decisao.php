<?php

$idade = 21;

echo "Você só pode entrar se tiver mais doque 18 anos" . PHP_EOL;

if($idade >= 18){
    echo "Você tem $idade anos. Pode entrar.";
}else{
    echo "Você só tem $idade anos. Não pode entrar.";
}