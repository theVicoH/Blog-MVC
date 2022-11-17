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

    public function insertUsers(Users $user): bool{
        $query = $this->pdo->prepare("INSERT INTO Users(username, password, email, role) VALUES ('Vicoh', '1234', 'victor@gmail.com', 'admin'");
        $query->execute();
        return true;
    }
}

// penser à toutes les fonction que je pourrais apl plus tard

// récup suppr 