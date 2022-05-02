<?php

namespace App\Controller;

use App\Model\ArticleModel;
use Core\Controller\DefaultController;

class ArticleController extends DefaultController
{

    /**
     * Return a list of Article
     * 
     */
    public function index(): void
    {
        $model = new ArticleModel();
        $this->jsonResponse($model->findAll());
    }
}
