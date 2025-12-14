<?php

class Connection {

    // Attributes

    private static $conn = null;



    // Methods

    public static function getConnection() {

        if (self::$conn == null) {

            $options = [

                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

            ];

            self::$conn = new PDO("mysql:host=localhost:3306;dbname=client11_18_2025", "root", "bancodedados", $options);

        }

        return self::$conn;

    }

}