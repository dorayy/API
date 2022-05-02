<?php

use App\Controller\ArticleController;
use App\Controller\CategorieController;

define('ROOT', dirname(__DIR__));
require ROOT . "/vendor/autoload.php";

#(new CategorieController)->index();
#(new ArticleController)->index();
#(new CategorieController)->getOneById(1);
#(new ArticleController)->getOneById(1);