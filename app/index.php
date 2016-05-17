<?php

require_once __DIR__.'/../vendor/autoload.php';

use Routing\lib\Route as Route;

$route = new Route();

$route->add('/','home');
$route->add('/about', 'about');
$route->add('/contact', 'contact');


$route->submit();

ActiveRecord\Config::initialize(function($config){
    $config->set_connections([
        'development' => 'mysql://dom:root@127.0.0.1/website'
    ]);
});


use Routing\Model\User;


User::create([
    'username' => 'Dominic',
    'email'    => 'dominic@tonicbuzz.com'
]);