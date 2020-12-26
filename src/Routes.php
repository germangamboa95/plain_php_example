<?php

$router = $this->router;

$router->get('/',  'App\Controllers\HomeController@index');

$router->post('/',  'App\Controllers\HomeController@store');
