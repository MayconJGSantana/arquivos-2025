<?php

require_once("model/Friend.php");
require_once("model/Unknown.php");
require_once("model/BestFriend.php");
require_once("dao/DaoPerson.php");
require_once("util/Connection.php");

function createPerson() {

    $intimacy = readline("Intimidade [0-10]: ");

    if ($intimacy < 5) {

        $person = new Unknown();

    }
    else if ($intimacy < 9) {


        $person = new Friend();
        $person -> setQuality(readline("Qualidade: "));

    }
    else {

        $person = new BestFriend();
        
        $person -> setFavoriteColor(readline("Cor favorita: "))
                -> setFavoriteFood(readline("Comida favorita: "))
                -> setLifeDream(readline("Sonho de vida: "));

    }

    $person -> setBirthCity(readline("Cidade: "))
            -> setBirthDate(readline("Data: "))
            -> setIntimacy($intimacy)
            -> setHeight(readline("Altura: "))
            -> setWholeName(readline("Nome: "));

    return $person;
    
}

$options = ["Inserir", "Listar", "Buscar", "Excluir"];

$choice = readline("Escolha: ");

switch ($choice) {

    case 1:


        $person = createPerson();
        $dao = new DaoFriend();
        $dao -> savePerson($person);
        break;

    case 2:

        $dao = new DaoFriend();
        $persons = $dao -> listPersons();

        var_dump($persons);
        foreach($persons as $person) {

            print($person . "\n");

        }

        break;

    case 3:

        $dao = new DaoFriend();
        $person = $dao -> findPersonById(readline("Id: "));

        print($person);
        break;

    case 4:

        $dao = new DaoFriend();
        $dao -> deletePerson(readline("Id: "));
        break;

}

