<?php
//importuje klase
require_once 'AppController.php';
//extends dziedziczenie
class HomeC extends  AppController{

    public function home1(){
        $this->render('home1');
    }

    public function home3(){
        $this->render('home3');
    }
    public function htest(){
        $this->render('htest');
    }
    public function home4(){
        $this->render('home4');
    }
    public function home5(){
        $this->render('home5');
    }
    public function home6(){
        $this->render('home6');
    }
    public function home7(){
        $this->render('home7');
    }
    public function home8(){
        $this->render('home8');
    }
    public function home9(){
        $this->render('home9');
    }
    public function home10(){
        $this->render('home10');
    }
    public function home11(){
        $this->render('home11');
    }
    public function home12(){
        $this->render('home12');
    }
}