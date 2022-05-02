<?php

namespace Core\Model;

use Core\Database\Database;
use Core\Traits\JsonTrait;

class DefaultModel extends Database
{

    protected string $table;
    protected string $entity;

    use JsonTrait;

    /**
     * Retourne  un ensembe d'élèments d'une table
     * 
     * @return array<int,object>
     */
    public function findAll(): array
    {

        try {
            $stmt = "SELECT * FROM $this->table";
            $qry = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "App\Entity\\$this->entity");
            return $qry->fetchAll();
        } catch (\PDOException $e) {
            $this->jsonResponse($e->getMessage(), 400);
        }
    }
}
