<?php

namespace CadastroVeiculos\Controller;

use CadastroVeiculos\Model\MarcaModel;
use CadastroVeiculos\Controller\Controller;

class MarcaController extends Controller
{
    public static function index()
    {
        $model = new MarcaModel();
        $model->getAllRows();

        parent::render('Marca/ListaMarca', $model);
        
    }

    public static function form()
    {
        $model = new MarcaModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        parent::render('Marca/FormMarca', $model);
    }

    public static function save()
    {
        $marca = new MarcaModel();

        $marca->id = $_POST['id'];
        $marca->nome = $_POST['nome'];

        $marca->save();

        header("Location: /marca");
    }

    public static function delete()
    {
        $model = new MarcaModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /marca");
    }
}