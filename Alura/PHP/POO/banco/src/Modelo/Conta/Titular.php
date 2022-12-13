<?php
namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Autenticavel;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Pessoa;

class Titular extends Pessoa implements Autenticavel{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco){
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
	/**
	 * @param string $senha
	 * @return bool
	 */
	public function podeAutenticar(string $senha): bool {
        return $senha === '5678';
    }

}
?>