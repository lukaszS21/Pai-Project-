<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
class UserC extends  AppController
{
    private $UserRepository;
    private $user;
    public function __construct()
    {
        parent::__construct();
        $this->UserRepository =new UserRepository();
        $this->user = $this->UserRepository->getUserById();
    }
    public function userD()
   {

       $this->render2('userD', ['user'=>$this->user]);
   }
}