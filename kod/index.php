<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index',"defalutC");
Routing::get('project',"defalutC");
Routing::post('login',"SecurityC");
Routing::post('addProject',"ProjectC");
Routing::run($path);

