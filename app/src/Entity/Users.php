<?php

namespace App\Entity;

use App\Interfaces\PasswordProtectedInterface;
use App\Interfaces\UserInterface;

class Users 
{
    private int $id;
    private string $username;
    private string $password;
    private string $email;
    private string $role;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): string
    {
        return $this->username = $username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): string
    {
        return $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): string
    {
        return $this->email = $email;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): string
    {
        return $this->role = $role;
    }

    public function getHashedPassword(): void
    {
        // TODO: Implement getHashedPassword() method.
    }

    public function passwordMatch(): void
    {
        // TODO: Implement passwordMatch() method.
    }
}