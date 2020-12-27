<?php


namespace App\Controllers;

use Symfony\Component\HttpFoundation\RedirectResponse;

class HomeController
{

    public function index()
    {
        $data = "This is a message";



        $messages = [$data, $data, $data, $data, $data, '<script>alert()</script>'];

        return render('home.twig', ['data' => $data]);
    }

    public function show($id)
    {
        $data = ['resource_id' => $id];

        return jsonResponse($data);
    }

    public function store()
    {
        $response = new RedirectResponse('/');
        return $response->send();
    }
}