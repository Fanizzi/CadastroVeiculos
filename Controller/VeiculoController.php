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

        if (isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        $model->marca = $model->getAllMarcas();
        $model->fabricante = $model->getAllFabricantes();
        $model->tipo_veiculo = $model->getAllTipoVeiculos();
        $model->combustivel = $model->getAllCombustivel();

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
        $veiculo->revisao = $_POST['revisao'];
        $veiculo->sinistro = $_POST['sinistro'];
        $veiculo->roubo_furto = $_POST['roubo_furto'];
        $veiculo->aluguel = $_POST['aluguel'];
        $veiculo->venda = $_POST['venda'];
        $veiculo->particular = $_POST['particular'];
        $veiculo->observacao = $_POST['observacao'];
        $veiculo->id_Marca = $_POST['id_Marca'];
        $veiculo->id_Fabricante = $_POST['id_Fabricante'];
        $veiculo->id_TipoDeVeiculo = $_POST['id_TipoDeVeiculo'];
        $veiculo->id_Combustivel = $_POST['id_Combustivel'];
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