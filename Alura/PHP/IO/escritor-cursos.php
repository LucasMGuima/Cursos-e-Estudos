<?php
$arquivo = fopen('cursos-php.txt', 'w');
$curso = 'Design Patterns PHP I: Boas práticas de programação';
/*
Adiciona no arquivo apartir do comeco sempre
fwrite($arquivo, $curso);
fclose($arquivo);
*/

#Adiciona no final do arquivo
file_put_contents('cursos-php.txt', $curso);
$curso = "\nDesign Patterns PHP II: Boas práticas de programação";
file_put_contents('cursos-php.txt', $curso, FILE_APPEND);
?>