<?php

class Connection {
    
    private static ?PDO $connection = null;
    
    public static function getConnection() : PDO {
        if (self::$connection == null) {
            $options = [
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            
            self::$connection = new PDO("mysql:host=localhost:3306;dbname=assignmentPersistence", "root", "bancodedados", $options);
        }
        
        return self::$connection;
    }
    
}