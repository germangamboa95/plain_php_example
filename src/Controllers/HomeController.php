<?php


namespace App\Controllers;

class HomeController
{

    public function index()
    {
        $data = "This is a message";

        dd(render('home', compact('data')));
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
