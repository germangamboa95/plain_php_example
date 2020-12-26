<?php


namespace App\Controllers;

class HomeController
{

    public function index()
    {
        $data = ['hi'];

        return jsonResponse($data);
    }

    public function show($id)
    {
        $data = ['resource_id' => $id];

        return jsonResponse($data);
    }

    public function store()
    {
        return jsonResponse(request()->toArray());
    }
}
