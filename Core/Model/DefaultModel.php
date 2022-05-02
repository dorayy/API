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
     * return a table elements
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

    /**
     * return one table element
     * 
     * @return array<int,object>
     */
    public function find(int $id): array
    {

        try {
            $stmt = "SELECT * FROM $this->table WHERE id = $id";
            $qry = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "App\Entity\\$this->entity");
            return $qry->fetchAll();
        } catch (\PDOException $e) {
            $this->jsonResponse($e->getMessage(), 400);
        }
    }
}
