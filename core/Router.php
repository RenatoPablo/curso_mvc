<?php

namespace core;

class Router
{

    private $controller = 'Site';
    private $method = 'home';
    private $param = [];

    public function __construct()
    {
        $router = $this->url();
        
        //esta verificando se a classe existe e forçando o nome da classe na url a vir com a primeira letra maiuscula
        if(file_exists('app' . DIRECTORY_SEPARATOR . 'controllers'.DIRECTORY_SEPARATOR . ucfirst($router[0]) . '.php')):
            $this->controller = $router[0];
            unset($router[0]);
        endif;

        $class = "\\app\\controllers\\" . ucfirst($this->controller);

        $object = new $class;

        if(isset($router[1]) && method_exists($class, $router[1])):
            $this->method = $router[1];
            unset($router[1]);
        endif;

        $this->param = $router ? array_values($router): [];

        call_user_func_array([$object, $this->method], $this->param);

    }

    private function url()
    {
        $parse_url = explode("/", filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));

        return $parse_url;
    }
}