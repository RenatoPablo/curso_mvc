<?php

namespace app\controllers;

class Site
{
    public function home()
    {
        require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'home.php';
    }

    public function galeria($foto)
    {
        $photo = $foto;
        require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'galeria.php';
    }
}