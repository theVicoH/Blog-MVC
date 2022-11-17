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

    public function getUserById(int $id): ?Users
    {
        $query = $this->pdo->query("SELECT * FROM Users WHERE id = :id");
        $query->bindValue('id', $id);
        $query->execute();

        $users = [];

        $data = $query->fetch(\PDO::FETCH_ASSOC);

        if (!$data) return null;

        return new Users($data);
        
    }

    public function deleteUser(int $id)
    {
        $query = $this->pdo->query("DELETE * FROM Users WHERE id = :id");
        $query->bindValue('id', $id);
        $query->execute();
    }

    public function insertUser(Users $user)
    {
        $query = $this->pdo->query("INSERT INTO Users (username, password, email, role) VALUES (:username, :password, :email, :role)");
        $query->bindValue('username', $user->getUsername());
        $query->bindValue('password', $user->getPassword());
        $query->bindValue('email', $user->getEmail());
        $query->bindValue('role', $user->getRole());
        $query->execute();
    }
}