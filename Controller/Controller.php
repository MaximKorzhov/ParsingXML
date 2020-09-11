<?php
require_once 'components/ReadingDataFactory.php';
require_once 'Model/BaseModel.php';
require_once 'Model/WriteModelCategories.php';
require_once 'Model/WriteModelOffers.php';
require_once 'Model/ReadingModel.php';
require_once 'view/IndexView.php';

class Controller
{
    public function index()
    {
        new BaseModel();
        $reading = new ReadingModel();
        $dataAll = $reading->readDataTable();
        $indexView = new IndexView();
        $dataOffers = $dataAll;
        $producers = [];

        if (!empty($_POST)  && $_POST['offer'][0] !== '' && $_POST['offer'][0] !== "AllOffers") {
            $vendor = $_POST['offer'];
            $dataOffers = [];
            foreach ($dataAll as $key=>$data) {
                if (in_array("$vendor[0]", $data))
                $dataOffers[] = $dataAll[$key];
            }
        }

        foreach ($dataAll as $producer){
            $producers[] = $producer['vendor'];
        }

        $producers = array_unique($producers);

        $indexView->render($producers, $dataOffers);
    }

    public function writeData($filePath, $categories, $offers)
    {
        $base = new BaseModel();
        $data = $base->getData($filePath);
        if ($categories !== 0) ReadingDataFactory :: getObjectToWrite($categories)->writeTableData($data);
        if ($offers !== 0) ReadingDataFactory :: getObjectToWrite($offers)->writeTableData($data);
    }
}