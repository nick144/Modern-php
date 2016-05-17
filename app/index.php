<?php

require_once __DIR__.'/../vendor/autoload.php';

use Routing\lib\Route as Route;

$route = new Route();

$route->add('/','home');
$route->add('/about', 'about');
$route->add('/contact', 'contact');


$route->submit();

//echo "<pre>";
//print_r($route);