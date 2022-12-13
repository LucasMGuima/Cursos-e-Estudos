<?php
namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property string $cidade
 * @property string $bairro
 * @property string $rua
 * @property string $numero
 */
class Endereco{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero){
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }
    public function __toString():string{
        return "{$this->cidade}, {$this->bairro}, {$this->rua}, {$this->numero}";
    }
    public function __get(string $atributName){
        $metodo = "get" . ucfirst($atributName);
        return $this->$metodo();
    }
    public function __set(string $nomeAtributo, string $valor):void{
        $this->$nomeAtributo = $valor;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getRua(){
        return $this->rua;
    }
    public function getNumero(){
        return $this->numero;
    }
}
?>