<?php
require_once 'Model/WriteModelCategories.php';
require_once 'Model/WriteModelOffers.php';

class ReadingDataFactory
{
    public static function getObjectToWrite($tableName)
    {
        switch ($tableName)
        {
            case "categories":
                return new WriteModelCategories();
            case "offers":
                return new WriteModelOffers();
            default:
                throw new \Exception("Unknown table name");
        }
    }
}