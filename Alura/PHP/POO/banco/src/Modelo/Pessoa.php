<?php
namespace Alura\Banco\Modelo;

abstract class Pessoa{
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf){
        $this->nome = $this->validaNome($nome);
        $this->cpf = $cpf;
    }

    public function getNome() : string
    {
        return $this->nome;
    }
    public function getCpf() : CPF
    {
        return $this->cpf;
    }

    final private function validaNome(string $nome){
        if(strlen($nome) < 5){
            echo 'Nome precisa ter mais de 5 caracteres.' . PHP_EOL;
            exit();
        }
        return $nome;
    }
}
?>