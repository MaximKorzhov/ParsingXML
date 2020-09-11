<?php
require_once 'components/IReading.php';
require_once 'Model/BaseModel.php';

class WriteModelCategories extends BaseModel implements IReading
{
    public function writeTableData($data)
    {
        foreach($data->shop->categories->category as $value) {
            $parentId = $value['parentId'] ? $value['parentId'] : 0;
            $stmt = $this->connection->prepare("INSERT INTO categories (id, parent_id, category) VALUES (:id, :parentId, :category)");
            $stmt->bindParam(':id', $value['id']);
            $stmt->bindParam(':parentId', $parentId);
            $stmt->bindParam(':category', $value[0]);
            $stmt->execute();
        }
        return 1;
    }
}