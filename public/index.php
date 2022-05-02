<?php

use App\Model\CategorieModel;

define('ROOT', dirname(__DIR__));
require ROOT . "/vendor/autoload.php";
header("content-type: application/json");

$model = new CategorieModel();
$model = $model->findAll();

echo json_encode($model);
