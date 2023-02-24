<?php

namespace CadastroVeiculos\Model;

use CadastroVeiculos\DAO\TipoDAO;

class TipoModel extends Model
{
    public $id, $nome;

    public function save()
    {
        $dao = new TipoDAO();

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
        $dao = new TipoDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new TipoDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new TipoModel();
    }

    public function delete(int $id)
    {
        $dao = new TipoDAO();

        $dao->delete($id);
    }
}