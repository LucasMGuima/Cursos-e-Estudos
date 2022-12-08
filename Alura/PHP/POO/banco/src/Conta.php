<?php
class Conta{
    private Titular $titular;
    private float $saldo;

    private static int $numeroDeContas;

    public function __construct(Titular $titular){
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;//self acessa a classe atual
    }
    public function __destruct(){
        self::$numeroDeContas--;
    }

    public static function getNumeroContas() : int{
        return self::$numeroDeContas;
    }
    public function getSaldo() : float{
        return $this->saldo;
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