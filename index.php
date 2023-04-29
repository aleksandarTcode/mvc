<?php
spl_autoload_register(function ($classname) {
    require_once __DIR__ . "/model/{$classname}.php";
});

class Controller
{
    public $viewbag = [];
    public $view;

    public function showView(string $v = null): void
    {
        require_once __DIR__ . "/view/" . ($v ?? $this->view) . ".php";
    }
}

$controller = $_GET['c'] ?? '';
$method = $_GET['m'] ?? '';
if (!empty($controller) && !empty($method)) {
    require_once __DIR__ . "/controller/{$controller}.php";
    $c = new $controller;
    $c->$method();
}
