<?php

use App\Core\Database;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;



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
