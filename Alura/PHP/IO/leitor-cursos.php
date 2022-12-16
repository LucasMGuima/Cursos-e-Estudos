<?php
$arquivo = fopen('lista-curso.txt', 'r');

/*
LE LINHA POR LINHA
while(!feof($arquivo)){
    $curso = fgets(($arquivo));
    echo $curso . PHP_EOL;
}
*/

/*
LE O ARQUIVO TODO DE UMA VEZ
$tamanhoArquivo = filesize('lista-curso.txt');
$cursos = fread($arquivo, $tamanhoArquivo);
echo $cursos;
*/

$cursos = file_get_contents('lista-curso.txt');
echo $cursos;

fclose($arquivo);
?>