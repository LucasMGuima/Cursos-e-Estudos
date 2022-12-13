<?php
namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Autenticavel;
use Alura\Banco\Servico\Autenticador;
class Gerente extends Funcionario implements Autenticavel{
    public function calculaBonificacao(): float{
        return $this->getSalario();
    }
	public function podeAutenticar(string $senha): bool {
        return $senha === '4321';
    }
}
?>