<?php
class Conta{
    private $cpfTitular;
    private $nomeTitular;
    private $saldo = 0;//define um valor inicial

    public function getCpfTitular() : string{
        return $this->cpfTitular;
    }
    public function getNomeTitular() : string{
        return $this->nomeTitular;
    }
    public function getSaldo() : float{
        return $this->saldo;
    }

    public function setCpfTitular(string $cpf) : void{
        $this->cpfTitular = $cpf;
    }
    public function setNomeTitular(string $nome) : void{
        $this->nomeTitular = $nomee;
    }

    public function sacar(float $valorSacar) : void{
        if($valorSacar > $this->saldo){
            echo 'Saldo indiponível.' . PHP_EOL;
            return;
        }
        $this->saldo -= $valorSacar;
    }

    public function depositar(float $valorDeposito) : void{
        if($valorDeposito < 0){
            echo 'Valor de depósito não é valido.' . PHP_EOL;
            return;
        }
        $this->saldo += $valorDeposito;
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