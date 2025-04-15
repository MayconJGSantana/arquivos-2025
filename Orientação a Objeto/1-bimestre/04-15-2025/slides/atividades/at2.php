<?php

// $dados = array();


$pessoas = array(
                 array (
                        "nome" => "Manuel de Medeiros",
                        "endereço" => "Rua das Acácias",
                        "cidade" => "Foz do Iguaçu",
                        "UF" => "PR"
                 ),
                 array (
                        "nome" => "Juliana de Amaral",
                        "endereço" => "Rua dos Pinheiros",
                        "cidade" => "Florianópolis",
                        "UF" => "SC"
                 ),
                 array (
                        "nome" => "Rodrigo Baidek",
                        "endereço" => "Rua Dom Pedro I",
                        "cidade" => "Petrópolis",
                        "UF" => "RJ"
                 ),
                 array(
                       "nome" => "Fabíola da Silva",
                       "endereço" => "Rua Chile",
                       "cidade" => "Guarulhos",
                       "UF" => "SP"
                 )

);

/* for ($i = 0; $i < 5; $i++) {

    print(str_repeat(15, "-") . $i + 1 . "° Pessoa" . str_repeat(15, "-") . "\n");

    $nome = readline("Entre com o nome: ");
    $endereco = readline("Entre com o endereço: ");
    $cidade = readline("Entre com o cidade: ");
    $uf = readline("Entre com o uf: ");

    array_push($dados, $nome, $endereco, $cidade, $uf);

} */

foreach ($pessoas as $chave => $pessoa) {

    print(str_repeat ("-", 15) . $chave + 1 . "° Pessoa" . str_repeat("-", 15) . "\n");

    foreach ($pessoa as $chave => $dado) {

        print($dado);

        if  ($chave != "UF") {
            print (" | ");
        }
    }

    print ("\n");
    print ("\n");
}