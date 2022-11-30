<?php
function exibeMensagem(string $mensagem) : void{
    echo $mensagem . '<br>';
}

function sacar(array $conta, float $valorSacar) : array{
    if($valorSacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar este valor.");
    }else{
        $conta['saldo'] -= $valorSacar;
    }

    return $conta;
}

// funcao nome (tipo nome_var) : tipo_retorno
function depositar(array $conta, float $valor) : array{
    if($valor > 0){
        $conta['saldo'] += $valor;
    }else{
        exibeMensagem("Depositos devem ser positivos");
    }

    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibirConta(array $conta) : void{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}
?>