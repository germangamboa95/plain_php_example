<?php

namespace App\Core;


class ViewEngine
{

    protected $twig;

    public function __construct()
    {
        $config = ['development' => [], 'production' => [
            'cache' => __DIR__ . "/../../cache",
        ]];

        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . "/../Views/");
        $this->twig = new \Twig\Environment($loader, $config[$_ENV['env']]);
    }

    public function render(string $view, array $args)
    {

        return  $this->twig->render($view, $args);
    }
}