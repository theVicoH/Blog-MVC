<?php

namespace App\Controller;

class HomePageAdminController {
    
    public function homepageAdmin()
    {
        include dirname(__DIR__, 1) . '/views/homepage-admin.php';
    }
}

?>