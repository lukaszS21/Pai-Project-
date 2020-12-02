<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
class SecurityC extends AppController
{
    public function login()
    {
        $user= new User("john@op.pl",'1234','ola','kot');
        if($this->isPost()){
            return $this->login('login');
        }

        $email=$_POST["email"];
        $password= $_POST["password"];

        if($user->getEmail() !==$email){
            return $this->render('login',['messages' => ["Użytkownik z takim emailem nie istnieje"]]);
        }
        if($user->getPassword() !==$password){
            return $this->render('login',['messages' => ["Wrong password"]]);
        }
        return $this->render("projects");

    }
}