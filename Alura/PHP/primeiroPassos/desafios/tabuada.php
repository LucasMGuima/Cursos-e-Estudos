<?php
/*
    Mostra a tabua de determinado numero
*/

$numero = 5;
for($i = 0; $i <= 10; $i += 1){
    $r = $i * $numero;
    echo "$i x $numero = $r".PHP_EOL;
}