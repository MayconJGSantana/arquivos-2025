<?php

require_once("model/Friend.php");
require_once("model/Person.php");
require_once("model/BestFriend.php");
require_once("dao/DaoFriend.php");
require_once("util/Connection.php");

function createPerson() {

    $intimacy = readline("Intimidade [0-10]: ");

    if ($intimacy < 5) {

        $person = new Person();

    }
    else if ($intimacy < 9) {


        $person = new Friend();
        $person -> setQuality(readline("Qualidade: "));

    }
    else {

        $person = new BestFriend();
        
        $person -> setQuality(readline("Qualidade: "))
                -> setFavoriteColor(readline("Cor favorita: "))
                -> setFavoriteFood(readline("Comida favorita: "))
                -> setLifeDream(readline("Sonho de vida: "));

    }

    $person -> setBirthCity(readline("Cidade: "))
            -> setBirthDate(readline("Data: "))
            -> setHeight(readline("Altura: "))
            -> setWholeName(readline("Nome: "));

    return $person;
    
}

$options = ["Inserir", "Listar", "Buscar", "Excluir"];


var_dump(date('l'));


        $connection = Connection::getConnection();

$choice = readline("Escolha: ");

switch ($choice) {

    case 1:


        $person = createPerson();
        $dao = new DaoFriend();
        $dao -> createFriend($friend -> getBirthCity(), $friend -> getBirthDate(), $friend -> getHeight(), $friend -> getQuality(), $friend -> getWholeName());
        break;

    case 2:

        $dao = new DaoFriend();
        $friends = $dao -> listFriends();

        var_dump($friends);
        foreach($friends as $friend) {

            print($friend . "\n");

        }

    case 3:

        $dao = new DaoFriend();
        $friend = $dao -> findFriendById(readline("Id: "));

        print($friend);
        break;

    case 4:

        $dao = new DaoFriend();
        $dao -> deleteFriend(readline("Id: "));
        break;

}

