<?php

namespace App\Controller;

use App\Entity\Users;
use App\Factory\PDOFactory;
use App\Manager\UsersManager;

class UserController
{
    public function addUser()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $newUser = (new Users());
        $newUser->setUsername($username);
        $newUser->setPassword($password);

        $manager = new UsersManager(new PDOFactory());
        $manager->insertUsers($newUser);
    }
}