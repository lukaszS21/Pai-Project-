<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('index',"defalutC");
Router::get('menu',"defalutC");
Router::post('login2',"defalutC");

Router::post('addProject',"ProjectC");
Router::post('projects',"ProjectC");
Router::post('search',"ProjectC");

Router::post('login',"SecurityC");
Router::post('register',"SecurityC");
Router::post('logout',"SecurityC");

Router::post('home1',"HomeC");
Router::post('home5',"HomeC");
Router::post('home8',"HomeC");
Router::post('home9',"HomeC");
Router::post('home10',"HomeC");
Router::post('home11',"HomeC");
Router::post('htest',"HomeC");
Router::post('userD',"UserC");


Router::run($path);

