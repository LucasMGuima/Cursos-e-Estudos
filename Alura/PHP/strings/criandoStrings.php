<?php
function gerarEmail(string $nome): void{
    $email = <<<FINAL
    Olá, $nome!
    Estamos entrando em contato para {assunto}.

    {assinatura}
    FINAL;

    echo $email;
}

gerarEmail("Jose") . PHP_EOL;
?>