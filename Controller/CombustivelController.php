<?php

namespace CadastroVeiculos\Controller;

use CadastroVeiculos\Model\CombustivelModel;
use CadastroVeiculos\Controller\Controller;

class CombustivelController extends Controller
{
    public static function index()
    {
        $model = new CombustivelModel();
        $model->getAllRows();

        parent::render('Combustivel/ListaCombustivel', $model);
        
    }

    public static function form()
    {
        $model = new CombustivelModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        parent::render('Combustivel/FormCombustivel', $model);
    }

    public static function save()
    {
        $combustivel = new CombustivelModel();

        $combustivel->id = $_POST['id'];
        $combustivel->nome = $_POST['nome'];

        $combustivel->save();

        header("Location: /combustivel");
    }

    public static function delete()
    {
        $model = new CombustivelModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /combustivel");
    }
}