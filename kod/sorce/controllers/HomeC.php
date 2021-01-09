<?php
//importuje klase
require_once 'AppController.php';
//extends dziedziczenie
class HomeC extends  AppController{

    public function home1(){
        $this->render('home1');
    }

    public function htest(){
        $this->render2('htest');
    }
    public function home5(){
        $this->render2('home5');
    }

    public function home8(){
        $this->render2('home8');
    }
    public function home9(){
        $this->render2('home9');
    }
    public function home10(){
        $this->render2('home10');
    }
    public function home11(){
        $this->render2('home11');
    }
    public function home12(){
        $this->render2('home12');
    }
}