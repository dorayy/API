<?php

namespace App\Model;

use Core\Model\DefaultModel;

final class ClientModel extends DefaultModel
{
    protected string $table = "client";
    protected string $entity = "Client";

    /**
     * Ajoute un client a la database
     * 
     * @param array $client
     * 
     * @return ?int
     */
    public function saveclient(array $client): ?int
    {
        $stmt = "INSERT INTO $this->table (company , apikey) VALUES (:company , :apikey)";
        $prepare = $this->pdo->prepare($stmt);

        if ($prepare->execute($client)) {
            // récupéré l'id du dernier ajout a la bd
            return $this->pdo->lastInsertId($this->table);
        } else {
            $this->jsonResponse("Erreur lors de l'insersion d'un client", 400);
        }
    }
}
