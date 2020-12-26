<?php

use App\Core\Database;
use App\Core\ViewEngine;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

if (!function_exists('db')) {
    function db(): PDO
    {
        return Database::instance()->getConnection();
    }
}


if (!function_exists('dd')) {
    function dd(...$args)
    {
        var_dump($args);
        die();
    }
}


if (!function_exists('request')) {
    function request()
    {
        return Request::createFromGlobals();
    }
}


if (!function_exists('jsonResponse')) {
    function jsonResponse(array $data)
    {
        $response = new JsonResponse($data);
        $response->send();
        return $response;
    }
}


if (!function_exists('render')) {

    function render(string $view, array $data)
    {
        $r = new ViewEngine();
        $response = new Response($r->render($view, $data));
        return $response->send();
    }
}
