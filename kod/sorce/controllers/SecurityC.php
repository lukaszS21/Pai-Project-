<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
class SecurityC extends AppController{
    private $userRepository;
    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }
    /** @noinspection PhpVoidFunctionResultUsedInspection */
    public function login()
        {

            if (!$this->isPost()) {
                return $this->render('login2');
            }
            $email = $_POST["email"];
            $password = $_POST["password"];
            $userRepository = new UserRepository();
            $user = $userRepository->getUser($email);

            setcookie('id', $user->getId(), time()+(86400 * 30), "/");

            $user = $userRepository->getUser($email);

            if (!$user) {
                return $this->render('login2', ['messages' => ['User not found!']]);
            }

            if ($user->getEmail() !== $email) {
                return $this->render('login2', ['messages' => ['User with this email not exist!']]);
            }

            if ($user->getPassword() !== md5($password) ){
                return $this->render('login2', ['messages' => ['Wrong password!']]);
            }

            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/menu");
        }
    public function logout(){
        if(isset($_COOKIE['id'])){

            unset($_COOKIE['id']);
            setcookie('id', null, -1, '/');
        }
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/home1");

    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }


        $user = new User($email, md5($password), $name, $surname,0);
        $user->setPhone($phone);
        $this->userRepository->addUser($user);

        return $this->render('login2', ['messages' => ['You\'ve been succesfully registrated!']]);
    }
}