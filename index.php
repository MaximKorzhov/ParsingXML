<?php
require_once "Controller/Controller.php";

$reading = new Controller();
$reading->index();
//The name corresponds to the name of the table.
// If you need to write data in a table,
// change the value of the standard ones by removing zero and changing the row data

$filePath = ("./docs/goods.xml");
$categories = 0;//"categories";
$offers = 0;//"offers";
if($categories !== 0 || $offers !== 0) $reading->writeData($filePath, $categories, $offers);