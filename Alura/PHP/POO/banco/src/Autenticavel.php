<?php
namespace Alura\Banco;
interface Autenticavel{
    public function podeAutenticar(string $senha): bool;
}
?>