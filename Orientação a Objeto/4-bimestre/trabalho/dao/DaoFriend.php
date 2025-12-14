<?php

require_once("util/Connection.php");

class DaoFriend {

    public function listFriends() {

        $connection = Connection::getConnection();

        $statement = $connection -> prepare("SELECT * FROM person");

        $statement -> execute();

        $datas = $statement -> fetchAll();

        // Turn data into friend instance

        $datasFriends = array();

        foreach ($datas as $data) {

            $friend = new Friend();

            $friend -> setId($data['id'])
                    -> setBirthCity($data['birth_city'])
                    -> setBirthDate($data['birth_date'])
                    -> setHeight($data['height'])
                    -> setQuality($data['quality'])
                    -> setWholeName($data['whole_name']);

            array_push($datasFriends, $friend);
        }

        return $datasFriends;
    }

    public function savePerson(Person $person) {

        $connection = Connection::getConnection();

        if ($person instanceof Person) {

            $statement = $connection -> prepare("INSERT INTO friend (birth_city, birth_date, height, intimacy, whole_name) VALUES (?, ?, ?, ?)");

            $statement -> execute([$person -> getBirthCity(), $person -> getBirthDate(), $person -> getHeight(), $person -> getIntimacy(), $person -> getWholeName()]);

        }
        else if ($person instanceof Friend) {

            $statement = $connection -> prepare("INSERT INTO friend (birth_city, birth_date, height, intimacy, quality, whole_name) VALUES (?, ?, ?, ?, ?)");

            $statement -> execute([$person -> getBirthCity(), $person -> getBirthDate(), $person -> getHeight(), $person -> getQuality(), $person -> getIntimacy(), $person -> getWholeName()]);

        }
        else if ($person instanceof BestFriend) {

            $statement = $connection -> prepare("INSERT INTO friend (birth_city, birth_date, favorite_color, favorite_food, height, intimacy, quality, whole_name) VALUES (?, ?, ?, ?, ?)");

            $statement -> execute([$person -> getBirthCity(), $person -> getBirthDate(), $person -> getFavoriteColor(), $person -> getFavoriteFood(), $person -> getHeight(), $person -> getIntimacy(), $person -> getQuality(), $person -> getWholeName()]);

        }

    }
    
    public function deleteFriend($idFriend) {

        $connection = Connection::getConnection();

        $statement = $connection -> prepare("DELETE FROM person WHERE id = ?");

        $statement -> execute([$idFriend]);

    }

    public function findFriendById($idFriend) {

        $connection = Connection::getConnection();

        $statement = $connection -> prepare("SELECT * FROM person WHERE id = ?");

        $statement -> execute([$idFriend]);

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
            
            $person -> setQuality(readline("Qualidade: "))
                    -> setFavoriteColor(readline("Cor favorita: "))
                    -> setFavoriteFood(readline("Comida favorita: "))
                    -> setLifeDream(readline("Sonho de vida: "));

        }

        $person -> setBirthCity(readline("Cidade: "))
                -> setBirthDate(readline("Data: "))
                -> setHeight(readline("Altura: "))
                -> setWholeName(readline("Nome: "));
        
        return $friend;
    }
    
}