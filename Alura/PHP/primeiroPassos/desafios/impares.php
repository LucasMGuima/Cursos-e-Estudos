<?php
/*
    Mostra os números impares entro 0 e 100
*/

for($i = 0; $i <= 100; $i+=1){
    if($i%2 == 0) continue;
    echo "-> $i".PHP_EOL;
}