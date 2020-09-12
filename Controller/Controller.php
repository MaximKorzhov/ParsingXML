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
        $producer = '';
        new BaseModel();
        $indexView = new IndexView();
        $reading = new ReadingModel();

        if (!empty($_POST)  && $_POST['offer'][0] !== '' && $_POST['offer'][0] !== "AllOffers") {
            $vendor = $_POST['offer'];
            $producer ="$vendor[0]";
        }

        $dataAll = $reading->readDataTable($producer);
        $dataOffers = $dataAll;
        $producers = [];

        session_start();
        if (!isset($_SESSION['producers'])) {
            foreach ($dataAll as $producer){
                $producers[] = $producer['vendor'];
            }

            $_SESSION['producers'] = array_unique($producers);
        }
        
        $indexView->render($_SESSION['producers'], $dataOffers);
    }

    public function writeData($filePath, $categories, $offers)
    {
        $base = new BaseModel();
        $data = $base->getData($filePath);
        if ($categories !== 0) ReadingDataFactory :: getObjectToWrite($categories)->writeTableData($data);
        if ($offers !== 0) ReadingDataFactory :: getObjectToWrite($offers)->writeTableData($data);
    }
}
