<?php
require_once 'Model/BaseModel.php';

class ReadingModel extends BaseModel
{
    public  function readDataTable($producer)
    {
        $producer = $producer ? " WHERE offers.vendor='$producer'" : '';
        $sth = $this->connection->prepare("SELECT * FROM offers LEFT JOIN categories ON (offers.category_id=categories.id)" . $producer);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}
