<?php
/*
    Calculo do IMC e mostra se está bom ou não
*/

$peso = 50;
$altura = 1.70;
$imc = $peso / $altura**2;

echo "Seu IMC é de : $imc, sendo ";
if($imc < 17){
    echo "muito a baixo do peso";
}elseif($imc >= 17 && $imc <= 18.49){
    echo "abaixo do peso";
}elseif($imc >= 18.5 && $imc <= 24.99){
    echo "peso normal";
}elseif($imc >= 25 && $imc <= 29.99){
    echo "acima do peso";
}elseif($imc >= 30 && $imc <= 34.99){
    echo "obesidade I";
}elseif($imc >= 35 && $icm <= 39.99){
    echo "obesidade II (severa)";
}else{
    echo "obesidade III (mórbida)";
}