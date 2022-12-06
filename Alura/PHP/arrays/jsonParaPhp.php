<?php
    $dadosString = "[
        {
            \"pais\": \"Brasil\",
            \"medalhas\": {
                \"ouro\": 3,
                \"prata\": 5,
                \"bronze\": 3
            }
        },
        {
            \"pais\": \"Costa rica\",
            \"medalhas\": {
                \"ouro\": 5,
                \"prata\": 4,
                \"bronze\": 4
            }
        },
        {
            \"pais\": \"Estados unidos\",
            \"medalhas\": {
                \"ouro\": 4,
                \"prata\": 3,
                \"bronze\": 5
            }
        },
        {
            \"pais\": \"Trindade e tobago\",
            \"medalhas\": {
                \"ouro\": 4,
                \"prata\": 3,
                \"bronze\": 4
            }
        }
    ]";
    $dadosEmJson = json_decode($dadosString, true);

    $numParticipantes = count($dadosEmJson);
    echo "Número de países participantes: $numParticipantes" . PHP_EOL;
    
    $dadosEmJson = array_map(function ($item){
        $item['pais'] = mb_convert_case($item['pais'], MB_CASE_UPPER);
        return $item;
    }, $dadosEmJson);

    usort($dadosEmJson, function ($item1, $item2){
        $medalhas1 = $item1['medalhas'];
        $medalhas2 = $item2['medalhas'];
        
        return $medalhas2['ouro'] - $medalhas1['ouro'] !== 0
        ? $medalhas2['ouro'] - $medalhas1['ouro'] :
        ($medalhas2['prata'] - $medalhas1['prata'] !== 0 ?
        $medalhas2['prata'] - $medalhas1['prata'] : 
        $medalhas2['bronze'] - $medalhas1['bronze']);
    });

    $numeroDeMedalhas = array_reduce($dadosEmJson, function ($medalhasAcumuladas, $itemAtual) {
        $medalhasDoPais = array_reduce($itemAtual['medalhas'], function ($medalhasAcumuladasDoPaisAtual, $medalhasDoPaisAtual) {
            return $medalhasAcumuladasDoPaisAtual + $medalhasDoPaisAtual;
        }, 0);
    
        return $medalhasAcumuladas + $medalhasDoPais;
    }, 0);
    
    echo "Total de medalhas entregues: $numeroDeMedalhas";
    //var_dump($dadosEmJson);
?>