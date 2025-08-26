<?php

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");


function volta() {

    $voltar = "";

    do {

        $voltar = readline("Que voltar [aperte enter] ");

    } while ($voltar = "");

}

function lista (array $lista) {

    foreach ($lista as $elemento) {

        print($elemento . "\n\n");

    }

}

function menu() {

    $opcoes = ["Sair", "Cadastrar", "Cancelar", "Listar", "Total de Vendas"];

    foreach (array_slice($opcoes, 1) as $chave => $opcao) {

        printf("[ %d ] - %s\n", $chave + 1, $opcao);

    }

    printf("[ %d ] - %s\n\n", 0, $opcoes[0]);

    do {

        $escolhaUsuario = readline("Qual seria  a opção que gostarias? ");

        if (! ($escolhaUsuario >= 0 && $escolhaUsuario < count($opcoes))) {

            printf("\t%sValor inválido, tente novamente%s\n", "\033[31m", "\033[m");

        }

    } while(! ($escolhaUsuario >= 0 && $escolhaUsuario < count($opcoes)));

    return $escolhaUsuario;

}

// Lista de pratos

$pratos = [

    [

        "nome" => "Camarão à Milanesa",
        "valor" => 110
    
    ],

    [

        "nome" => "Pizza Margherita",
        "valor" => 80
    
    ],

    [

        "nome" => "Macarrão à Carbonara",
        "valor" => 60
    
    ],

    [

        "nome" => "Bife à Parmegiana",
        "valor" => 75
    
    ],

    [

        "nome" => "Risoto ao Funghi",
        "valor" => 70
    
    ]

];

$objetoPratos = array();

foreach ($pratos as $chave => $prato) {

    $objetoPrato = new Prato;
    
    $objetoPrato -> setNome($prato["nome"])
                 -> setValor($prato["valor"])
                 -> setNumero($chave + 1);

    array_push($objetoPratos, $objetoPrato);

}


// Menu

$escolhaUsuario = menu();


// Executa opções

$pedidos = array();

while(true) {

    switch ($escolhaUsuario) {

        case 0:

            exit;
            break;

        case 1:

            $pedido = new Pedido;
            $pedido -> setNomeGarcom(readline("Nome do garçom: "))
                    -> setNomeCliente(readline("Nome do cliente: "));

            print("\n\n");

            lista($objetoPratos);

            print("\n\n");

            do {

                $prato = readline("Qual seria o prato que gostarias? ");

                if (! ($prato > 0 && $prato <= count($objetoPratos))) {

                    printf("\t%sValor inválido, tente novamente%s\n", "\033[31m", "\033[m");

                }

            } while(! ($prato > 0 && $prato < count($objetoPratos)));
            
            $pedido -> setPrato($objetoPratos[$prato - 1]);

            array_push($pedidos, $pedido);

            volta();

            break;

        case 2:

            if (empty($pedidos)) {

                printf("\t%sNao há pedidos!%s\n", "\033[31m", "\033[m");

            }

            else {

                foreach ($pedidos as $pedido) {

                    printf("O cliente %s, foi atendido pelo garçom %s, pediu um prato de %s no valor de R$%.2f.\n\n",
                        $pedido -> getNomeCliente(),
                        $pedido -> getNomeGarcom(),
                        $pedido -> getPrato() -> getNome(),
                        $pedido -> getPrato() -> getValor());

                }

                print("\n\n");

                $indiceExcluir = readline("Qual é o pedido que queres excluir?");
                
                array_splice($pedidos, $indiceExcluir, 1);
            
                print("\n\n");

            }

            volta();

            break;

        case 3:

            if (empty($pedidos)) {

                printf("\t%sNao há pedidos!%s\n", "\033[31m", "\033[m");

            }

            else {

                foreach ($pedidos as $pedido) {

                    printf("O cliente %s, foi atendido pelo garçom %s, pediu um prato de %s no valor de R$%.2f.\n\n",
                        $pedido -> getNomeCliente(),
                        $pedido -> getNomeGarcom(),
                        $pedido -> getPrato() -> getNome(),
                        $pedido -> getPrato() -> getValor());

                }

            }

            volta();

            break;

        case 4:

            if (empty($pedidos)) {

                printf("\t%sNao há pedidos!%s\n", "\033[31m", "\033[m");

            }

            else {

                $totalVendas = 0;

                foreach ($pedidos as $pedido) {

                    $totalVendas += $pedido -> getPrato() -> getValor();

                }
                
                printf("Valor total: %.2f\n\n", $totalVendas);
                
            }

            break;

    }

    $escolhaUsuario = menu();

}