<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('index',"defalutC");
Router::get('project',"defalutC");
Router::post('login',"SecurityC");
Router::post('addProject',"ProjectC");
Router::run($path);

