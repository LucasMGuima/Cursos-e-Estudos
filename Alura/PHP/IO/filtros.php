<?php
require 'MeuFiltro.php';

$arquivo = fopen('lista-curso.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);
stream_filter_append($arquivo, 'alura.partes');

echo fread($arquivo, filesize('lista-curso.txt'));
?>