<?php
namespace App\Controller;

class LoginController {
    
    public function login()
    {
        include dirname(__DIR__, 1) . '/views/login.php';
    }
}

?>