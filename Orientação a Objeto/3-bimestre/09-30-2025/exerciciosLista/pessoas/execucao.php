<?php

require_once("model/PessoaFisica.php");
require_once("model/PessoaJuridica.php");

function listar(array $pessoas) {

    foreach ($pessoas as $chave => $pessoa) {

        print("\t" . $chave . ": " . $pessoa . "\n\n");
        
    }

}


$pessoas = array();

$opcoes = ["Sair", "Cadastrar pessoa física", "Cadastrar pessoa jurídica", "Listar", "Excluir"];

while (true) {

    // Faz menu

    print(str_repeat("\n", 50) . str_pad("MENU", 40, "-", STR_PAD_BOTH) . "\n");

    foreach (array_slice($opcoes, 1) as $chave => $opcao) {

        printf("[ %d ] - %s\n", $chave + 1, $opcao);

    }

    printf("[ %d ] - %s\n\n", 0, $opcoes[0]);


    // Lê a escolha do usuário

    while (true) {

        $opcao = readline("Opção: ");

        if ($opcao >= 0 && $opcao < count($opcoes)) {

            break;

        }

        else {

            print ("\t\033[31m" . "Valor inválido, tente novamente!" . "\033[m\n");

        }

    } 


    print(str_repeat("\n", 50) . str_pad($opcoes[$opcao], 40, "-", STR_PAD_BOTH) . "\n");

    switch ($opcao) {

        case 1:

            $pessoaFisica = new PessoaFisica();

            $pessoaFisica -> setNome(readline("Nome: "))
                          -> setIdade(readline("Idade: "))
                          -> setCpf(readline("CPF: "));

            $pessoas[] = $pessoaFisica;

            break;
        
        case 2:

            $pessoaJuridica = new PessoaJuridica();

            $pessoaJuridica -> setNome(readline("Nome: "))
                            -> setNomeFantasia(readline("Nome fantasia: "))
                            -> setCpnj(readline("CNPJ: "));

            $pessoas[] = $pessoaJuridica;

            break;

        case 3:

            if (empty($pessoas)) {

                print ("\033[31m" . "Sem pessoas dentro!" . "\033[m");
                
            }

            else {

                listar($pessoas);

            }

            break;

        case 4:

            if (empty($pessoas)) {

                print ("\033[31m" . "Sem pessoas dentro!" . "\033[m");
                
            }

            else {

                listar($pessoas);

                while (true) {

                    $indice = readline("Qual é o índice? ");

                    if ($indice >= 0 && $indice <= (count($pessoas) - 1)) {

                        array_splice($pessoas, $indice, 1);

                        break;

                    }

                    else {

                        print ("\t\033[31m" . "Valor inválido, tente novamente!" . "\033[m\n");

                    }

                }

            }
 
            break;

        case 0:

            exit();

            break;

        default:

            print("\t\033[31mInválido\033[m\n");

            break;

    }

    sleep(2);
        
}