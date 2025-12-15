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

                $personObject = new Unknown();

            }
            else if ($data['intimacy'] < 9) {


                $personObject = new Friend();
                $personObject -> setQuality($data["quality"]);

            }
            else {

                $personObject = new BestFriend();
                
                $personObject -> setFavoriteColor($data["favorite_color"])
                        -> setFavoriteFood($data["favorite_food"])
                        -> setLifeDream($data["life_dream"]);

            }

            $personObject -> setBirthCity($data["birth_city"])
                    -> setBirthDate($data["birth_date"])
                    -> setId($data["id"])
                    -> setIntimacy($data["intimacy"])
                    -> setHeight($data["height"])
                    -> setWholeName($data["whole_name"]);

            array_push($personObjects, $personObject);

        }

        return $personObjects;
    }

    public function savePerson(Person $person) {

        $connection = Connection::getConnection();

        if ($person instanceof Unknown) {

            $statement = $connection -> prepare("INSERT INTO person (birth_city, birth_date, height, intimacy, whole_name) VALUES (?, ?, ?, ?, ?)");

            $statement -> execute([$person -> getBirthCity(), $person -> getBirthDate(), $person -> getHeight(), $person -> getIntimacy(), $person -> getWholeName()]);

        }
        else if ($person instanceof Friend) {

            $statement = $connection -> prepare("INSERT INTO person (birth_city, birth_date, height, intimacy, quality, whole_name) VALUES (?, ?, ?, ?, ?)");

            $statement -> execute([$person -> getBirthCity(), $person -> getBirthDate(), $person -> getHeight(), $person -> getQuality(), $person -> getIntimacy(), $person -> getWholeName()]);

        }
        else if ($person instanceof BestFriend) {

            $statement = $connection -> prepare("INSERT INTO person (birth_city, birth_date, favorite_color, favorite_food, height, intimacy, life_dream, whole_name) VALUES (?, ?, ?, ?, ?)");

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

            $person = new Unknown();

        }
        else if ($data['intimacy'] < 9) {


            $person = new Friend();
            $person -> setQuality($data["quality"]);

        }
        else {

            $person = new BestFriend();
            
            $person -> setFavoriteColor($data["favorite_color"])
                    -> setFavoriteFood($data["favorite_food"])
                    -> setLifeDream($data["life_dream"]);

        }

        $person -> setBirthCity($data["birth_city"])
                -> setBirthDate($data["birth_date"])
                -> setId($data["id"])
                -> setIntimacy($data["intimacy"])
                -> setHeight($data["height"])
                -> setWholeName($data["whole_name"]);
        
        return $person;
    }
    
}