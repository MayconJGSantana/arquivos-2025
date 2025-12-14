<?php

require_once("util/Connection.php");

class DaoFriend {

    public function listPersons() {

        $connection = Connection::getConnection();

        $statement = $connection -> prepare("SELECT * FROM person");

        $statement -> execute();

        $datas = $statement -> fetchAll();

        // Turn data into friend instance

        $personObjects = array();

        foreach ($datas as $data) {

            if ($data['intimacy']) {

                $personObject = new Person();

            }
            else if ($data['intimacy'] < 9) {


                $personObject = new Friend();
                $personObject -> setQuality(readline("Qualidade: "));

            }
            else {

                $personObject = new BestFriend();
                
                $personObject -> setFavoriteColor(readline("Cor favorita: "))
                        -> setFavoriteFood(readline("Comida favorita: "))
                        -> setLifeDream(readline("Sonho de vida: "));

            }

            array_push($personObjects, $personObject);

        }

        return $personObjects;
    }

    public function savePerson(Person $person) {

        $connection = Connection::getConnection();

        if ($person instanceof Unknown) {

            $statement = $connection -> prepare("INSERT INTO friend (birth_city, birth_date, height, intimacy, whole_name) VALUES (?, ?, ?, ?)");

            $statement -> execute([$person -> getBirthCity(), $person -> getBirthDate(), $person -> getHeight(), $person -> getIntimacy(), $person -> getWholeName()]);

        }
        else if ($person instanceof Friend) {

            $statement = $connection -> prepare("INSERT INTO friend (birth_city, birth_date, height, intimacy, quality, whole_name) VALUES (?, ?, ?, ?, ?)");

            $statement -> execute([$person -> getBirthCity(), $person -> getBirthDate(), $person -> getHeight(), $person -> getQuality(), $person -> getIntimacy(), $person -> getWholeName()]);

        }
        else if ($person instanceof BestFriend) {

            $statement = $connection -> prepare("INSERT INTO friend (birth_city, birth_date, favorite_color, favorite_food, height, intimacy, life_dream, whole_name) VALUES (?, ?, ?, ?, ?)");

            $statement -> execute([$person -> getBirthCity(), $person -> getBirthDate(), $person -> getFavoriteColor(), $person -> getFavoriteFood(), $person -> getHeight(), $person -> getIntimacy(), $person -> getLifeDream(), $person -> getWholeName()]);

        }

    }
    
    public function deletePerson($personId) {

        $connection = Connection::getConnection();

        $statement = $connection -> prepare("DELETE FROM person WHERE id = ?");

        $statement -> execute([$personId]);

    }

    public function findPersonById($personId) {

        $connection = Connection::getConnection();

        $statement = $connection -> prepare("SELECT * FROM person WHERE id = ?");

        $statement -> execute([$personId]);

        $data = $statement -> fetchAll();

        $data = $data[0];

        var_dump($data);

        if ($data['intimacy']) {

            $person = new Person();

        }
        else if ($data['intimacy'] < 9) {


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
                -> setHeight(readline("Altura: "))
                -> setWholeName(readline("Nome: "));
        
        return $person;
    }
    
}