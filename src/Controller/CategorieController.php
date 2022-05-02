<?php

namespace App\Controller;

use App\Model\CategorieModel;
use Core\Controller\DefaultController;

final class CategorieController extends DefaultController
{
    private $model;
    public function __construct()
    {
        $this->model = new CategorieModel();
    }

    /**
     * Return a list of categories
     * @return void
     */
    public function index(): void
    {
        $this->jsonResponse($this->model->findAll());
    }

    /**
     * Return a categorie
     * @return void
     */
    public function getOneById(int $id): void
    {
        $this->jsonResponse($this->model->find($id));
    }
}
