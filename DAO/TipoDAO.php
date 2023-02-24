<?php

namespace CadastroVeiculos\DAO;

use CadastroVeiculos\Model\TipoModel;
use \PDO;

class TipoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(TipoModel $model)
    {
        $sql = "INSERT INTO TipoDeVeiculo (nome) VALUE (?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->execute();
    }

    public function update(TipoModel $model)
    {
        $sql = "UPDATE TipoDeVeiculo SET nome=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM TipoDeVeiculo";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM TipoDeVeiculo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CadastroVeiculos\Model\TipoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM TipoDeVeiculo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}