<?php

require_once("modelo/Pedido.php");
require_once("modelo/Prato.php");


function volta() {

    $voltar = "";

    do {

        $voltar = readline("Quer voltar [aperte enter] ");

    } while ($voltar != "");

    print("\n");

}

function lista (array $lista) {

    foreach ($lista as $elemento) {

        print($elemento . "\n\n");

    }

}

function listaPedidos ($pedidos) {

    foreach ($pedidos as $chave => $pedido) {

        printf("[ %d ] - O cliente %s, foi atendido pelo garçom %s, pediu um prato de %s no valor de R$%.2f.\n\n",
            $chave + 1,
            $pedido -> getNomeCliente(),
            $pedido -> getNomeGarcom(),
            $pedido -> getPrato() -> getNome(),
            $pedido -> getPrato() -> getValor());

    }

}

function menu($opcoes) {

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


$opcoes = ["Sair", "Cadastrar", "Cancelar", "Listar", "Total de Vendas"];
$escolhaUsuario = menu($opcoes);

print("\n");


// Executa opções

$pedidos = array();

while(true) {

    
    print("\n" . str_pad($opcoes[$escolhaUsuario], 30, "-", STR_PAD_BOTH) . "\n\n");
    sleep(1);

    switch ($escolhaUsuario) {


        case 0:

            exit;
            break;

        case 1:

            $pedido = new Pedido;
            $pedido -> setNomeGarcom(readline("Nome do garçom: "))
                    -> setNomeCliente(readline("Nome do cliente: "));

            print("\n");

            lista($objetoPratos);

            do {

                $prato = readline("Qual seria o prato que gostarias? ");

                if (! ($prato > 0 && $prato <= count($objetoPratos))) {

                    printf("\t%sValor inválido, tente novamente%s\n", "\033[31m", "\033[m");

                }

            } while(! ($prato > 0 && $prato <= count($objetoPratos)));
            
            $pedido -> setPrato($objetoPratos[$prato - 1]);

            array_push($pedidos, $pedido);

            print("\n");

            volta();

            break;

        case 2:

            if (empty($pedidos)) {

                printf("\t%sNao há pedidos!%s\n", "\033[31m", "\033[m");

            }

            else {

                listaPedidos($pedidos);

                do {

                    $indiceExcluir = readline("Qual é o pedido que queres excluir? ");

                    if (! ($indiceExcluir > 0 && $indiceExcluir <= count($pedidos))) {

                        printf("\t%sValor inválido, tente novamente%s\n", "\033[31m", "\033[m");

                    }

                } while(! ($indiceExcluir > 0 && $indiceExcluir <= count($pedidos)));

                
                array_splice($pedidos, $indiceExcluir - 1, 1);

            }

            print("\n");

            volta();

            break;

        case 3:

            if (empty($pedidos)) {

                printf("\t%sNao há pedidos!%s\n\n", "\033[31m", "\033[m");

            }

            else {

                listaPedidos($pedidos);

            }

            volta();

            break;

        case 4:

            if (empty($pedidos)) {

                printf("\t%sNao há pedidos!%s\n\n", "\033[31m", "\033[m");

            }

            else {

                $totalVendas = 0;

                foreach ($pedidos as $pedido) {

                    $totalVendas += $pedido -> getPrato() -> getValor();

                }
                
                printf("Valor total: %.2f\n\n", $totalVendas);
                
            }

            volta();

            break;

    }

    $escolhaUsuario = menu($opcoes);

}