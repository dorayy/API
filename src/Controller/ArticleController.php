<?php

namespace App\Controller;

use App\Model\ArticleModel;
use Core\Controller\DefaultController;

final class ArticleController extends DefaultController
{
    private $model;
    public function __construct()
    {
        $this->model = new ArticleModel();
    }
    /**
     * Return a list of Article
     * 
     */
    public function index(): void
    {
        $this->jsonResponse($this->model->findAll());
    }

    /**
     * Return a article
     * @return void
     */
    public function getOneById(int $id): void
    {
        $this->jsonResponse($this->model->find($id));
    }
}
