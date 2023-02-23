<?php

namespace CadastroVeiculos\Model;

use CadastroVeiculos\DAO\FabricanteDAO;

class FabricanteModel extends Model
{
    public $id, $nome;

    public function save()
    {
        $dao = new FabricanteDAO();

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
        $dao = new FabricanteDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new FabricanteDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new FabricanteModel();
    }

    public function delete(int $id)
    {
        $dao = new FabricanteDAO();

        $dao->delete($id);
    }
}