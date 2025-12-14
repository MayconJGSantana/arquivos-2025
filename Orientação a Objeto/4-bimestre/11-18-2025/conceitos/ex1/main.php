<?php

require_once("model/Client.php");
require_once("model/Pjclient.php");
require_once("model/Pfclient.php");
require_once("util/Connection.php");

function addClient() {

    $client = new Pfclient();
    $client -> setCpf("132321")
            -> setEmail("@gma")
            -> setId(1)
            -> setSocialName("teste")
            -> setName("nome");



    $conn = Connection::getConnection();

    $sql = "INSERT INTO client (type, name) VALUES (?, ?)";

    $stmt = $conn -> prepare($sql)
          -> execute([$client -> getTipo() , $client -> getSocialName()]);

}


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

function doMenu(array $options) : void {

    printf("[ %d ] - %s", 0, $options[0]);
    foreach (array_splice() as $chave => $option) {

        printf("[ %d ] - %s", $chave, $option);
        
    }

}

/*
// $pessoa1 = new Pjclient()
//          -> 
//          ,


$conn = Connection::getConnection();

 $sql = "INSERT INTO client VALUES <?, ?>";


$sql = "INSERT INTO client VALUES <?, ?>";


$stmt = $conn -> prepare($sql)
      -> execute();
*/

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
    
    foreach ()


    $choice = readline("Informe a opção: ");

    switch ($choice) {
        case 1:
            echo "Não implementado!\n";
            break;

        case 2:
            echo "Não implementado!\n";
            break;

        case 3:
            showClients();
            break;

        case 4:
            showClients();

            break;

        case 5:
            echo "Não implementado!\n";
            break;

        case 0:
            
            exit();

            break;

        default:
            echo "Opção inválida!";
    }
} while($opcao != 0);
