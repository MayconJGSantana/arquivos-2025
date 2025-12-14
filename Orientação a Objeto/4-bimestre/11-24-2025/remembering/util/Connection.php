<?php

class Connection {
    
    private ?PDO $connection;
    
    public function getConnection() {
        
        if (self::$connection != null) {
            
            $options = [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                
            ];
            
            $connection = new PDO("mysql:host=localhost:3306", "root", "bancodedados", $options);
            
            return $connection;
            
        }

        
    }
    
}