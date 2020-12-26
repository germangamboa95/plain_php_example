<?php


namespace App\Core;

require_once __DIR__ . "/Helpers.php";

class Main
{
    protected static $instance = null;
    protected $router;

    public function __construct()
    {

        $this->router = new  Router();
    }

    public function loadRoutes()
    {

        require_once __DIR__ . "/../Routes.php";
    }

    public function processRequest()
    {
        $this->router->run();
    }
}
