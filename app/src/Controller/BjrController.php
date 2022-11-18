<?php
namespace App\Controller;

class BjrController {
    
    public function bonjour()
    {
        include dirname(__DIR__, 1) . '/views/bjr.php';
    }
}