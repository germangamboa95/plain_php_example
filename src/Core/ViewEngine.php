<?php

namespace App\Core;


class ViewEngine
{

    protected $directory;

    public function __construct()
    {
        $this->directory = __DIR__ . "/../Views/";
    }

    public function render(string $view, array $args)
    {
        extract($args);

        ob_start();

        require $this->directory . $view . '.view.php';

        $content = ob_get_clean();

        return $content;
    }
}
