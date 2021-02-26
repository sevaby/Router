<?php
require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';

$query = rtrim($_SERVER['REQUEST_URI'],'/');

Router::add('/posts/add',[ 'controller' => 'Posts', 'action' => 'add']);
Router::add('/posts',[ 'controller' => 'Posts', 'action' => 'index']);
Router::add('',[ 'controller' => 'Main', 'action' => 'index']);

dd($query);
//dd(Router::getRoutes());


if (Router::matchRoute($query)){
    dd(Router::getRoute());
}
else{
    echo '404';
}


