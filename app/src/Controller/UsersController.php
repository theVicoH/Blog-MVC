<?php
namespace App\Controller;

use App\Manager\UsersManager;
use App\Factory\PDOFactory;
use App\Entity\User;

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
        if(isset($_POST['username']) && isset($_POST['password'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
    
            $manager = new UsersManager(new PDOFactory());
            $user = $manager->getUserByUsername($username);
            // $pw = $user->getPassword(); 
            // $pw = $user->getPassword($user);
            // $pw = $user->getPassword($manager);
            // erreur dans user l.40
            
            
            // $pw = $manager->getPassword(); 
            // $pw = $manager->getPassword($manager);
            // $pw = $manager->getPassword($user);

            // $pw = getPassword($user);
            // $pw = getPassword($manager);


            
            if(!$user) {
                throw new \Exception('WRONG USERNAME OR PASSWORD');
                // throw new \Exception('CET USER EXISTE PAS');
            } else {
                $pw = $user->getPassword();
            }
            
            if ($pw == $password) {
                echo "coucou";
            } else {
                throw new \Exception('WRONG USERNAME OR PASSWORD');
                // throw new \Exception('MAUVAIS MDP');
            }



            header('Location: /homepage');
            exit;
            
        }


        include dirname(__DIR__, 1) . '/views/login.php';
    }
}