<?php
namespace Alura\Banco\Modelo\Conta;

abstract class Conta{
    private Titular $titular;
    protected float $saldo;

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

    public function sacar(float $valorSacar):void{
        $valorSaque = $valorSacar * $this->percentualTarifa();
        if($valorSaque > $this->saldo){
            echo 'Saldo indisponível';
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorDeposito) : void{
        if($valorDeposito < 0){
            echo 'Valor de depósito não é valido.' . PHP_EOL;
            return;
        }
        $this->saldo += $valorDeposito;
    }

    abstract protected function percentualTarifa(): float;
}
?>