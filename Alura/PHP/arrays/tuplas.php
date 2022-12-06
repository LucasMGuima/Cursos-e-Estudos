<?php
    $dados = [
        'nome' => 'Vinicius',
        'nota' => 10,
        'idade' => 24
    ];
    //['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados;
    extract($dados); //percore o array e tranforma cada chave numa variavel e atribui a ela seu valor
    var_dump($nome, $nota, $idade);
    var_dump(compact('nome','nota','idade')); //transforma varias variavies em um array
?>  