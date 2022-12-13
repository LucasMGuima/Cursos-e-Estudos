<?php
namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario{
    public function calculaBonificacao(): float{
        return 500.00;
    }
    public function sobreDeNivel(){
        $this->recebeAumento(($this->getSalario() * 0.75));
    }
}
?>