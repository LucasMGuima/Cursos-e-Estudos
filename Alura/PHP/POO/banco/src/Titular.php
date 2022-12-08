<?php
class Titular{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome){
        $this->cpf = $cpf;
        $this->nome = $this->validaNomeTitular($nome);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }

    private function validaNomeTitular(string $nome){
        if(strlen($nome) < 5){
            echo 'Nome precisa ter mais de 5 caracteres.' . PHP_EOL;
            exit();
        }
        return $nome;
    }
}
?>