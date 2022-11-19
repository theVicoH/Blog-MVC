<?php

namespace App\Manager;

use App\Entity\Users;
use App\Factory\PDOFactory;
use App\Interfaces\Database;

class UsersManager extends BaseManager
{
    public function getAllUsers(): array 
    {
        $query = $this->pdo->query("SELECT * FROM User");

        $users = [];

        while($data = $query->fetch(\PDO::FETCH_ASSOC)) {
            $users[] = new Users($data);
        }

        return $users;
    }

    public function getUserById(int $id): ?Users
    {
        $query = $this->pdo->prepare("SELECT * FROM User WHERE id = :id");
        $query->bindValue('id', $id);
        $query->execute();

        $users = [];

        $data = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$data) return null;

        return new Users($data);
        
    }   

    public function getUserByUsername(string $username): ?Users
    {
        $query = $this->pdo->prepare("SELECT * FROM User WHERE username = :username");
        $query->bindValue('username', $username);
        $query->execute();

        $data = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$data) return null;

        return new Users($data);
        
    }


    public function deleteUser(int $id)
    {
        $query = $this->pdo->prepare("DELETE * FROM User WHERE id = :id");
        $query->bindValue('id', $id);
        $query->execute();
    }

    public function insertUser(Users $user): bool
    {
        $query = $this->pdo->prepare("INSERT INTO User (username, password, email, role) VALUES (:username, :password, :email, :role)");
        $query->bindValue('username', $user->getUsername());
        $query->bindValue('password', $user->getPassword());
        $query->bindValue('email', $user->getEmail());
        $query->bindValue('role', $user->getRole());
        return (bool)$query->execute();
    }
}