<?php
require_once 'components/IReading.php';
require_once 'Model/BaseModel.php';

class WriteModelOffers extends BaseModel implements IReading
{
    public function writeTableData($data)
    {
        foreach($data->shop->offers->offer as $value) {
            $available = $value['available'] == 'true' ? 1 : 0;
            $statusNew = $value->statusNew == 'true' ? 1 : 0;
            $statusAction = $value->statusAction == 'true' ? 1 : 0;
            $statusTop = $value->statusTop == 'true' ? 1 : 0;

            $stmt = $this->connection->prepare(
                "INSERT INTO offers (id,category_id,name, description,articul, picture,price,optprice,statusNew,statusAction,statusTop,url,color,available,vendor)
                          VALUES (:id,:category_id,:name, :description, :articul,:picture,:price,:optprice,:statusNew,:statusAction,:statusTop,:url,:color,:available,:vendor)"
            );

            $stmt->bindParam(':id', $value['id']);
            $stmt->bindParam(':category_id', $value->categoryId);
            $stmt->bindParam(':name', $value->name);
            $stmt->bindParam(':description', $value->description);
            $stmt->bindParam(':picture', $value->picture);
            $stmt->bindParam(':price', $value->price);
            $stmt->bindParam(':optprice', $value->optprice);
            $stmt->bindParam(':statusNew', $statusNew);
            $stmt->bindParam(':statusAction', $statusAction);
            $stmt->bindParam(':statusTop', $statusTop);
            $stmt->bindParam(':url', $value->url);
            $stmt->bindParam(':available', $available);
            $stmt->bindParam(':vendor', $value->vendor);
            $stmt->bindParam(':articul', $value->articul);
            $stmt->bindParam(':color', $value->extprops->season);
        }
        return 1;
    }
}