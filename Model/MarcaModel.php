<?php

namespace CadastroVeiculos\Model;

use CadastroVeiculos\DAO\MarcaDAO;

class MarcaModel extends Model
{
    public $id, $nome;

    public function save()
    {
        $dao = new MarcaDAO();

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
        $dao = new MarcaDAO();

        $this->rows = $dao->select();
    }

    public function getById(int $id)
    {
        $dao = new MarcaDAO();

        $obj = $dao->selectById($id);

        return ($obj) ? $obj : new MarcaModel();
    }

    public function delete(int $id)
    {
        $dao = new MarcaDAO();

        $dao->delete($id);
    }
}