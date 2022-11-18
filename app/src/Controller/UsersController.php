<?php
namespace App\Controller;

use App\Manager\UsersManager;
use App\Factory\PDOFactory;
use App\Entity\Users;

class UsersController extends AbstractController {
    public function afficherUsers()
    {
        include dirname(__DIR__, 1) . '/views/afficher-users.php';
    }






    public function register()
    {
        if(isset($_POST['username']) && isset($_POST['password'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
    
            $manager = new UsersManager(new PDOFactory());
            $user = $manager->getUserByUsername($username);
    
            if($user) {
                throw new \Exception('trop ici');
            } 

            if($_POST['password'] !== $_POST['confirmPassword']) {
                throw new \Exception('bad password');
            }

            $newUser = (new Users())
                ->setUsername($username)
                ->setPassword(password_hash($password, PASSWORD_DEFAULT))
                ->setEmail($email);


            if (!$manager->insertUser($newUser)) {
                throw new \Exception('insert foireux');
            }


            header('Location: /login');
            exit;
            
        }

        include dirname(__DIR__, 1) . '/views/register.php';
    }






    public function login()
    {
        include dirname(__DIR__, 1) . '/views/login.php';
    }
}