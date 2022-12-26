<?php
try {
    echo "Executando" . PHP_EOL;
    throw new Excpetion("Excecao aqui");
} catch (Throwable $e){
    echo "Catch" . PHP_EOL;
} finally{
    echo "Finally" . PHP_EOL;
}
?>