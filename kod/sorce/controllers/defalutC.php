<?php
//importuje klase
require_once 'AppController.php';
//extends dziedziczenie
class defalutC extends  AppController{
    public function index(){
        //display login
        $this->render('login');

    }
    public function project(){
        //display project
        $this->render('projects');
    }

    public function login2(){
        $this->render('login2');
    }
}