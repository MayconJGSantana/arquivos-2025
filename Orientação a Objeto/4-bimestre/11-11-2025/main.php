<?php

require_once("model/Developer.php");
require_once("model/Intern.php");
require_once("model/Manager.php");

$employees = array();

while (true) {

    // Do menu

    $options = ["Sair", "Desenvolvedor", "Estagiário", "Gerente"];

    foreach (array_slice($options, 1, count($options) - 1, true) as $key => $option) {

        printf("[ %d ] - %s\n", $key, $option);

    }

    printf("[ %d ] - %s\n", 0, $options[0]);




    // Data entrance

    $positionChoice = readline("Posição? ");


    $employee = null;

    switch ($positionChoice) {

        case 0:

            exit;

        case 1:

            $employee = new Developer();

            break;

        case 2:

            $employee = new Intern();

            break;

        case 3:

            $employee = new Manager();

            break;

    }

    $employeeName = readline("Nome? ");

    $employee -> setName($employeeName);

    $employees[] = $employee;


    print($employee . "\n\n");
    sleep(2);

}

