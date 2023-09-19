<?php

// require_once "router.php";
// Router::handle(method: 'GET', path: '/', filename: 'index.php');
// Router::handle(method: 'GET', path: '/dashboard', filename: 'dashboard.php');

// $uri = $_SERVER['REQUEST_URI'];

// // // var_dump($uri);

// if ($uri == '/') {
//     require "index.php";
// }elseif ($uri == "/webperpustakaan/dashboard") {
//     require "dashboard.php";
// }


require_once('app/core/router.php');
require_once('app/init.php');
$app = new Router;