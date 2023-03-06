<?php

namespace CadastroVeiculos\Model;

use CadastroVeiculos\DAO\CombustivelDAO;
use CadastroVeiculos\DAO\FabricanteDAO;
use CadastroVeiculos\DAO\MarcaDAO;
use CadastroVeiculos\DAO\TipoDAO;
use CadastroVeiculos\DAO\VeiculoDAO;

class VeiculoModel extends Model
{
    public $id, $modelo, $ano_fabricado, $numero_chassi, $cor, $kilometragem, $revisao, $sinistro, $roubo_furto, $aluguel, 
    $venda, $particular, $observacao, $id_Marca, $id_Fabricante, $id_TipoDeVeiculo, $id_Combustivel;

    public $lista_marca, $lista_fabricante, $lista_tipo, $lista_combustivel;

    public function save()
    {
        $dao = new VeiculoDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        }
        else
        {
            $dao->update($this);
        }
    }

    public function getAllMarca()
    {
        $dao = new MarcaDAO();

        return $dao->select();
    }

    public function getAllFabricante()
    {
        $dao = new FabricanteDAO();
        
        return $dao->select();
    }

    public function getAllTipo()
    {
        $dao = new TipoDAO();
        
        return $dao->select();
    }

    public function getAllCombustivel()
    {
        $dao = new CombustivelDAO();

        return $dao->select();
    }

    public function getAllRows()
    {
        $dao = new VeiculoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new VeiculoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new VeiculoModel();
    }

    public function delete(int $id)
    {
        $dao = new VeiculoDAO();

        $dao->delete($id);
    }
}