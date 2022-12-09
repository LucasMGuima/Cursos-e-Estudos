<?php
spl_autoload_register(function (string $nomeCompletoClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    echo $caminhoArquivo.PHP_EOL;
    if(file_exists($caminhoArquivo)){
        require_once($caminhoArquivo);
    }
})
?>