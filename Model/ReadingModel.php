<?php
require_once 'Model/BaseModel.php';

class ReadingModel extends BaseModel
{
    public  function readDataTable()
    {
        $sth = $this->connection->prepare("SELECT * FROM offers LEFT JOIN categories ON (offers.category_id=categories.id)");
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}