<?php

namespace CadastroVeiculos\DAO;

use CadastroVeiculos\Model\MarcaModel;
use \PDO;

class MarcaDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(MarcaModel $model)
    {
        $sql = "INSERT INTO Marca (nome) VALUE (?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);

        $stmt->execute();
    }

    public function update(MarcaModel $model)
    {
        $sql = "UPDATE Marca SET nome=? WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM Marca";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        $sql = "SELECT * FROM Marca WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CadastroVeiculos\Model\MarcaModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Marca WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}