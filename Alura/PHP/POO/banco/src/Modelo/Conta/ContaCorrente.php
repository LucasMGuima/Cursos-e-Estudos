<?php
namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta{
    protected function percentualTarifa():float{
        return 1.05;
    }

    public function transferir(Conta $contaDestino, int $valor) : void{
        if($valor > $this->saldo){
            echo 'Saldo indisponvel.' . PHP_EOL;
            return;
        }
        $this->sacar($valor);
        $contaDestino->depositar($valor);
    }
}
?>