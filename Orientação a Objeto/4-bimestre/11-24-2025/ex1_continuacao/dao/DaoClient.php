<?php

require_once("model/Client.php");
require_once("model/PfClient.php");
require_once("model/PjClient.php");

class DaoClient {
    
    public function insert(Client $client) {

        $conn = Connection::getConnection();

        $sql = "INSERT INTO client (type, socialName, email, name, cpf, socialRole, cnpj) VALUES (?, ?, ?, ?, ?, ?, ?)";

        if ($client instanceof PfClient) {
            

            $statement = $conn -> prepare($sql)
                       -> execute([$client -> getType() , $client -> getSocialName(), $client -> getEmail(), $client -> getWholeName(), $client -> getCpf(), null, null]);

        }
        else if ($client instanceof PjClient) {
            
            $statement = $conn -> prepare($sql)
                       -> execute([$client -> getType(), $client -> getSocialName(), $client -> getEmail(), null, null, $client -> getWholeName(), $client -> getNroDoc()]);
                       
        }
        

    }
    
    public function list() {
        
        $conn = Connection::getConnection();
        
        $sql = "SELECT * FROM client";
        
        $statement = $conn -> prepare($sql);
        $statement -> execute();

        $datas = $statement -> fetchAll();
        
        return $datas;
    }
    
}