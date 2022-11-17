<?php

namespace App\Manager;

use App\Entity\Users;
use App\Factory\PDOFactory;
use App\Interfaces\Database;

class UsersManager extends BaseManager
{
    public function getAllUsers(): array 
    {
        $query = $this->pdo->query("SELECT * FROM Users");

        $users = [];

        while($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $users[] = new Users($data);
        }

        return $users;
    }

    public function insertUser(Users $user)
    {
        $query = $this->pdo->prepare('insert into Users (email, password) values (:email, :password');
        $query->bindValue('email', $users->getEmail());
        $query->bindValue('password', $users->getPassword());
        $query->execute();
        // $id = $query->lastInsertedId();
        $users->setId($id);

    }
}

// penser à toutes les fonction que je pourrais apl plus tard

// récup suppr 