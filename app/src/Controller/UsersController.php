<?php

namespace App\Controller;

class UsersController extends AbstractController {
    public function afficherUsers()
    {
        include dirname(__DIR__, 1) . '/views/afficher-users.php';
    }

    public function register()
    {
        include dirname(__DIR__, 1) . '/views/register.php';
    }

    public function login()
    {
        include dirname(__DIR__, 1) . '/views/login.php';
    }
}