<?php

namespace CadastroVeiculos\Model;

use CadastroVeiculos\DAO\CombustivelDAO;
use CadastroVeiculos\DAO\FabricanteDAO;
use CadastroVeiculos\DAO\MarcaDAO;
use CadastroVeiculos\DAO\TipoDAO;
use CadastroVeiculos\DAO\VeiculoDAO;

class VeiculoModel extends Model
{
    public $id, $nome;

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

    public function getAllRows()
    {
        $dao = new VeiculoDAO();

        $this->rows = $dao->select();
    }

    public function getAllMarcas()
    {
        $dao = new MarcaDAO();

        $this->rows = $dao->select();
    }

    public function getAllFabricantes()
    {
        $dao = new FabricanteDAO();

        $this->rows = $dao->select();
    }

    public function getAllTipoVeiculos()
    {
        $dao = new TipoDAO();

        $this->rows = $dao->select();
    }

    public function getAllCombustivel()
    {
        $dao = new CombustivelDAO();

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