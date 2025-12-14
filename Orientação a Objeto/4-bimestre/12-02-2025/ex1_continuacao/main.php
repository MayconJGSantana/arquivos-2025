<?php

require_once("model/Client.php");
require_once("model/PjClient.php");
require_once("model/PfClient.php");
require_once("util/Connection.php");
require_once("dao/DaoClient.php");


function showClients() {
            
    $conn = Connection::getConnection();

    $sql = "SELECT * FROM client";

    $stmt = $conn -> prepare($sql);
    $stmt -> execute();

    $result = $stmt -> fetchAll();


    foreach ($result as $line) {

        foreach ($line as $column) {

            print ($column . " - ");

        }

        print("\n");

    }

}

function createPfClients() {
    
    
    
}

function doMenu(array $options) : void {

    foreach (array_slice($options, 1, count($options) - 1, true) as $key => $option) {
        
        printf("[ %d ] - %s\n", $key, $option);
        
    }
    
    printf("[ %d ] - %s", 0, $options[0]);

}


$options = [

            "Sair",
            "Cadastrar Cliente PF",
            "Cadastrar Cliente PJ",
            "Listar Clientes",
            "Buscar Cliente",
            "Excluir Cliente"

           ];

do {
    
    echo "\n\n----CADASTRO DE CLIENTES----\n";
    
    doMenu($options);
    
    print("\n\n");


    $choice = readline("Informe a opção: ");

    switch ($choice) {
        case 1:
            
            $pfClient = new PfClient();
            $pfClient -> setCpf(readline("Cpf: "))
                      -> setEmail(readline("Email: "))
                      -> setSocialName(readline("Nome social: "))
                      -> setName(readline("Nome: "));


            $dao = new DaoClient();
            $dao -> insert($pfClient);
            
            print("\nCriado com sucesso!\n");
            
            break;

        case 2:
            
            $pjClient = new PjClient();
            $pjClient -> setCnpj(readline("Cnpj: "))
                      -> setEmail(readline("Email: "))
                      -> setSocialName(readline("Nome social: "))
                      -> setSocialRole(readline("Nome: "));
            
            $dao = new DaoClient();
            $dao -> insert($pjClient);

            print("\nCriado com sucesso!\n");
            
            break;

        case 3:
            
            $dao = new DaoClient();
            $datas = $dao -> list();
            
            foreach ($datas as $client) {
                
                print($client . "\n");
                
            }
            
            break;

        case 4:
            
            $dao = new DaoClient();
            $client = $dao -> findClientById(readline("Id: "));
            
            if ($client) {
                print($client . "\n");
                break;
            }
            
            print("Cliente não encontrado!");
            
            break;

        case 5:
            $dao = new DaoClient();
            
            $clients = $dao -> list();
            
            foreach ($clients as $client) {
                print($client . "\n");
            }
            
            $id = readline("Id: ");
            
            if ($dao -> findClientById($id)) {
                $dao -> deleteClientById($id);
                print("Cliente deletado!");
                break;
            }
            
            print("Erro ao deletar");
            
            break;

        case 0:
            
            exit();

            break;

        default:
            echo "Opção inválida!";
    }
} while($choice != 0);
