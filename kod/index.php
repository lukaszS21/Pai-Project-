<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('index',"defalutC");
Router::get('project',"defalutC");
Router::post('login',"SecurityC");
Router::post('addProject',"ProjectC");

Router::post('login2',"defalutC");
Router::post('home1',"HomeC");
Router::post('home2',"HomeC");
Router::post('home3',"HomeC");
Router::post('home4',"HomeC");
Router::post('home5',"HomeC");
Router::post('home6',"HomeC");
Router::post('home7',"HomeC");
Router::post('home8',"HomeC");
Router::post('home9',"HomeC");
Router::post('home10',"HomeC");
Router::post('home11',"HomeC");
Router::post('home12',"HomeC");
Router::run($path);

