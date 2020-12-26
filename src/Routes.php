<?php

$router = $this->router;

$router->get('/',  'App\Controllers\HomeController@index');

$router->get('/{id}',  'App\Controllers\HomeController@show');

$router->post('/',  'App\Controllers\HomeController@store');
