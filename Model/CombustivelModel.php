<?php

namespace CadastroVeiculos\Model;

use CadastroVeiculos\DAO\CombustivelDAO;

class CombustivelModel extends Model
{
    public $id, $nome;

    public function save()
    {
        $dao = new CombustivelDAO();

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
        $dao = new CombustivelDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new CombustivelDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new CombustivelModel();
    }

    public function delete(int $id)
    {
        $dao = new CombustivelDAO();

        $dao->delete($id);
    }
}