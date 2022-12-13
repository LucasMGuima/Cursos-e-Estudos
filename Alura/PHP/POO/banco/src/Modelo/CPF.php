<?php
namespace Alura\Banco\Modelo;

final class CPF{
    private string $numero;

    public function __construct(string $numero){
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }
}
?>