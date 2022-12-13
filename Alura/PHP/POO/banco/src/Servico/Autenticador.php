<?php
namespace Alura\Banco\Servico;

use Alura\Banco\Autenticavel;

class Autenticador{
    public function tentaLogin(Autenticavel $autenticavel, string $senha) : void{
        if($autenticavel->podeAutenticar($senha)){
            echo 'Ok. Usuário logado no sistema.' . PHP_EOL;
        }else{
            echo 'Ops. Senha incorreta.' . PHP_EOL;
        }
    }
}
?>