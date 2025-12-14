<?php

require_once("model/Client.php");
require_once("model/PfClient.php");
require_once("model/PjClient.php");

class DaoClient {
    
    public function insert(Client $client) {

        $conn = Connection::getConnection();
        $statement = $conn -> prepare("INSERT INTO client (type, socialName, email, name, cpf, socialRole, cnpj) VALUES (?, ?, ?, ?, ?, ?, ?)");

        if ($client instanceof PfClient) {
            $statement -> execute([$client -> getType() , $client -> getSocialName(), $client -> getEmail(), $client -> getWholeName(), $client -> getCpf(), null, null]);
        }
        else if ($client instanceof PjClient) {
            $statement -> execute([$client -> getType(), $client -> getSocialName(), $client -> getEmail(), null, null, $client -> getWholeName(), $client -> getNroDoc()]);
        }
        

    }
    
    public function list() {
        
        $conn = Connection::getConnection();
        
        $statement = $conn -> prepare("SELECT * FROM client");
        $statement -> execute();

        $datas = $statement -> fetchAll();
        
        return $this -> map($datas);
        
    }
    
    public function findClientById(int $idClient) {
        
        $connection = Connection::getConnection();
        
        $statement = $connection -> prepare("SELECT * FROM client WHERE id = ?");
        $statement -> execute([$idClient]);
        
        $datas = $statement -> fetchAll();
        
        $clients = $this -> map($datas);

        if (empty($clients))
            return null;

        return $clients[0];
        
    }
    
    public function deleteClientById(int $idClient) {
        
        $connection = Connection::getConnection();
        
        $statement = $connection -> prepare("DELETE FROM client WHERE id = ?");
        
        return $statement -> execute([$idClient]);
    }
    
    private function map(Array $datas) {
        $clients = array();
        
        foreach ($datas as $data) {
            if ($data['type'] == "F") {
                
                $client = new PfClient();
                $client -> setName($data['name'])
                        -> setCpf($data['cpf']);

            }
            else if ($data['type'] == "J") {
                
                $client = new PjClient();
                $client -> setSocialRole($data['socialRole'])
                        -> setCnpj($data['cnpj']);

            }
            
            $client -> setId($data['id'])
                    -> setSocialName($data["socialName"])
                    -> setEmail($data["email"]);
                    
            array_push($clients, $client);
        }
        
        return $clients;
    }
    
}