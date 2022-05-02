<?php

use Core\Database\Database;


class DefaultModel extends Database {

    protected string $table;
    protected string $entity;

    /**
     * Retourne  un ensembe d'élèments d'une table
     * 
     * @return array<int,object>
     */
    public function findAll(): array{

        try
        {
            $stmt = "SELECT * FROM $this->table";
            $qry = $this->pdo->query($stmt,\PDO::FETCH_CLASS , "App\Entity\\$this->entity");
            return $qry->fetchAll();
        }catch (\PDOException $e){
            header("content-type:application/json");
            header("http_response_code" , "400");
            echo json_encode($e->getMessage());
        }

    }
}