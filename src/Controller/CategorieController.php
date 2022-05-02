<?php

namespace App\Controller;

use App\Model\CategorieModel;
use Core\Controller\DefaultController;

class CategorieController extends DefaultController
{

    /**
     * Return a list of categories
     * 
     */
    public function index(): void
    {
        $model = new CategorieModel();
        $this->jsonResponse($model->findAll());
    }
}
