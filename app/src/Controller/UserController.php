<?php

namespace App\Controller;

use App\Manager\UserManager;
use App\Factory\PDOFactory;
use App\Entity\User;

class UserController extends AbstractController
{
    public function afficherUser()
    {
        include dirname(__DIR__, 1) . '/views/afficher-User.php';
    }


    public function register()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            $manager = new UserManager(new PDOFactory());
            $user = $manager->getUserByUsername($username);

            if ($user) {
                throw new \Exception('trop ici');
            }

            if ($_POST['password'] !== $_POST['confirmPassword']) {
                throw new \Exception('bad password');
            }

            $newUser = (new User())
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
        session_start();
        if (isset($_POST['username']) && isset($_POST['password'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];

            $manager = new UserManager(new PDOFactory());
            $user = $manager->getUserByUsername($username);

            if (!$user) {
                throw new \Exception('WRONG USERNAME OR PASSWORD');
                // throw new \Exception('CET USER EXISTE PAS');
            } else {
                $pw = $user->getPassword();
            }
            
            if (password_verify($password, $pw)) {
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $user->getId();
                header('Location: /ajouter-post');
            } else {
                throw new \Exception('WRONG USERNAME OR PASSWORD');
            }


            exit;
        }


        include dirname(__DIR__, 1) . '/views/login.php';
    }

}
