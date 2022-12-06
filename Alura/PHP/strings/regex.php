<?php
$telefones = ['(24) 99999 - 9999', ' (21) 99999 - 9999', '(24) 2222 - 2222'];
$regex = '/(^\([0-9]{2}\)) (9?[0-9]{4} - [0-9]{4})$/';

foreach ($telefones as $telefone){
    $telefoneValido = preg_match($regex, 
                                $telefone,
                                $verificacoes);

    //var_dump($verificacoes);
    if($telefoneValido){
        echo 'Telefone válido' . PHP_EOL;
    }else{
        echo 'Telefone inválido' . PHP_EOL;
    }

    //Substituicao com REGEX
    echo preg_replace($regex, 
                    '(XX) \2',
                    $telefone) . PHP_EOL;
}
?>