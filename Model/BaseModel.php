<?php

include "Config.php";

class BaseModel
{
    public $connection;

    function __construct()
    {
        $this->connection = new PDO('mysql:host=' . Config::$host . ';dbname=' . Config::$dbname . ";charset=utf8", Config::$login, Config::$pass);
    }

    public function getData($filePath)
    {
        if (file_exists($filePath)) {

            return simplexml_load_file($filePath);;

        }
        else {
            echo "Файл: " . $filePath . " не существует";
            exit;
        }
    }
}