<?php

namespace App\Controller;

class HomePageController {
    
    public function homepage()
    {
        include dirname(__DIR__, 1) . '/views/homepage.php';
    }
}

?>