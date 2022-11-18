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
    private string $role = 'user';

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): int
    {
        return $this->id = $id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): string
    {
        return $this->role = $role;
    }

    public function getHashedPassword(): string
    {
        // TODO: Implement getHashedPassword() method.
    }

    public function passwordMatch(): bool
    {
        // TODO: Implement passwordMatch() method.
    }
}