<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud
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

    public function cadastro()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            $cadastro = $this->create();
        }
        require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'cadastro.php';
    }

    public function consulta()
    {
        $consulta = $this->read();
        require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'consulta.php';
    }

    public function editar($id)
    {
        $editarForm = $this->editForm();
        require_once __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'editar.php';
    }

    public function alterar()
    {
        $alterar = $this->update();
        header("Location:?router=Site/consulta/");
    }

}