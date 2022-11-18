<?php

namespace App\Controller;

class UsersController {
    public function afficherPage()
    {
        include dirname(__DIR__, 1) . '/views/afficher-users.php';
    }
}