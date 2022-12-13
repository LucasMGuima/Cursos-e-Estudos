<?php
namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;
abstract class Funcionario extends Pessoa{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario){
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function getSalario() : float{
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento) : void{
        if($valorAumento < 0){
            echo 'Aumneto deve ser positivo' . PHP_EOL;
            return;
        }

        $this->salario += $valorAumento;
    }
}
?>