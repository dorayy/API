<?php

namespace App\Controlleur;

use Core\Controller\DefaultControlleur;
use App\Model\ClientModel;

class ClientController extends DefaultControlleur
{
    public function __construct()
    {
        $this->model = new ClientModel;
    }
    /**
     * Generation apikey for new client
     * 
     * @param array $client
     * @return void
     */
    public function save(): void
    {
        $apikey = md5(uniqid());
        $client['apikey'] = $apikey;

        $lastId = $this->model->saveClient($clients);

        $this->jsonResponse($this->model->find($lastId))
    }
}
