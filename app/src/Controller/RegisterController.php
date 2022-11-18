<?php
namespace App\Controller;

class RegisterController {
    
    public function register()
    {
        include dirname(__DIR__, 1) . '/views/register.php';
    }
}

?>