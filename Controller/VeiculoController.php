<?php

namespace CadastroVeiculos\Controller;

use CadastroVeiculos\Model\VeiculoModel;
use CadastroVeiculos\Controller\Controller;

class VeiculoController extends Controller
{
    public static function index()
    {
        $model = new VeiculoModel();
        $model->getAllRows();

        parent::render('Veiculo/ListaVeiculo', $model);

    }
    
    public static function form()
    {
        $model = new VeiculoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        $model->lista_marca = $model->getAllMarca();
        $model->lista_fabricante = $model->getAllFabricante();
        $model->lista_tipo = $model->getAllTipo();
        $model->lista_combustivel = $model->getAllCombustivel();

        parent::render('Veiculo/FormVeiculo', $model);
    }

    public static function save()
    {
        $veiculo = new VeiculoModel();

        $veiculo->id = $_POST['id'];
        $veiculo->modelo = $_POST['modelo'];
        $veiculo->ano_fabricado = $_POST['ano_fabricado'];
        $veiculo->numero_chassi = $_POST['numero_chassi'];
        $veiculo->cor = $_POST['cor'];
        $veiculo->kilometragem = $_POST['kilometragem'];
        $veiculo->revisao = array_key_exists('revisao', $_POST) ? true : false;
        $veiculo->sinistro = array_key_exists('sinistro', $_POST) ? true : false;
        $veiculo->roubo_furto = array_key_exists('roubo_furto', $_POST) ? true : false;
        $veiculo->aluguel = array_key_exists('aluguel', $_POST) ? true : false;
        $veiculo->venda = array_key_exists('venda', $_POST) ? true : false;
        $veiculo->particular = array_key_exists('particular', $_POST) ? true : false;
        $veiculo->observacao = $_POST['observacao'];
        $veiculo->id_Marca = $_POST['marca'];
        $veiculo->id_Fabricante = $_POST['fabricante'];
        $veiculo->id_TipoDeVeiculo = $_POST['tipo'];
        $veiculo->id_Combustivel = $_POST['combustivel'];
        $veiculo->save();

        header("Location: /veiculo");
    }

    public static function delete()
    {
        $model = new VeiculoModel();

        $model->delete( (int) $_GET['id']);

        header("Location: /veiculo");
    }
}