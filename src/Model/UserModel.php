<?php

namespace App\Model;

use App\Entity\User;
use Core\Model\DefaultModel;

class UserModel extends DefaultModel
{
    protected string $table = "user";
    protected string $entity = "User";


    /**
     * Récupère un nouveau user grace au mail
     *
     * @param array $user
     * @return User|false
     */

    public function getUserByEmail(string $email): User|false
    {
        $stmt = "SELECT * FROM User WHERE email = '$email'";
        $query = $this->pdo->query($stmt, \PDO::FETCH_CLASS, "App\Entity\\$this->entity");

        return $query->fetch();
    }


    /**
     * Enregistre un nouveau user
     *
     * @param array $user
     * @return integer|false
     */
    public function saveUser(array $user): int|false
    {
        $stmt = "INSERT INTO $this->table (nom, prenom, email, phone, roles , password) 
                VALUES (:nom, :prenom, :email, :phone, :roles, :password)";
        $prepare = $this->pdo->prepare($stmt);
        if ($prepare->execute($user)) {
            return $this->pdo->lastInsertId($this->table);
        }
        return false;
    }
}
