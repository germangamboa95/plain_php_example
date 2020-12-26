<?php


namespace App\Controllers;

class HomeController
{

    public function index()
    {

        db();
        $data = ['hi'];

        return jsonResponse($data);
    }
}
