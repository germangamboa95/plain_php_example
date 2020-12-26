<?php


namespace App\Controllers;

class HomeController
{

    public function index()
    {

        $data = ['hi'];

        return jsonResponse($data);
    }
}
