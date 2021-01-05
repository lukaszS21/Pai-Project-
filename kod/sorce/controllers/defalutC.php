<?php
//importuje klase
require_once 'AppController.php';
//extends dziedziczenie
class defalutC extends  AppController{
    public function index(){
        //display login
        $this->render('login');

    }
    public function menu(){
        //display project
        $this->render('menu');
    }

    public function login2(){
        $this->render('login2');
    }
}