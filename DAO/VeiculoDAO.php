<?php

namespace CadastroVeiculos\DAO;

use CadastroVeiculos\Model\VeiculoModel;
use \PDO;

class VeiculoDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(VeiculoModel $model)
    {
        $sql = "INSERT INTO Veiculo (modelo, ano_fabricado, numero_chassi, cor, kilometragem, revisao,
        sinistro, roubo_furto, aluguel, venda, particular, observacao, id_Marca, id_Fabricante, id_TipoDeVeiculo,
        id_Combustivel) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->modelo);
        $stmt->bindValue(2, $model->ano_fabricado);
        $stmt->bindValue(3, $model->numero_chassi);
        $stmt->bindValue(4, $model->cor);
        $stmt->bindValue(5, $model->kilometragem);
        $stmt->bindValue(6, $model->revisao);
        $stmt->bindValue(7, $model->sinistro);
        $stmt->bindValue(8, $model->roubo_furto);
        $stmt->bindValue(9, $model->aluguel);
        $stmt->bindValue(10, $model->venda);
        $stmt->bindValue(11, $model->particular);
        $stmt->bindValue(12, $model->observacao);
        $stmt->bindValue(13, $model->id_Marca);
        $stmt->bindValue(14, $model->id_Fabricante);
        $stmt->bindValue(15, $model->id_TipoDeVeiculo);
        $stmt->bindValue(16, $model->id_Combustivel);

        $stmt->execute();
    }

    public function update(VeiculoModel $model)
    {
        $sql = "UPDATE Veiculo SET modelo=?, ano_fabricado=?, numero_chassi=?, cor=?, kilometragem=?, revisao=?, 
        sinistro=?, roubo_furto=?, aluguel=?, venda=?, particular=?, observacao=?, id_Marca, id_Fabricante, 
        id_TipoDeVeiculo, id_Combustivel WHERE id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->modelo);
        $stmt->bindValue(2, $model->ano_fabricado);
        $stmt->bindValue(3, $model->numero_chassi);
        $stmt->bindValue(4, $model->cor);
        $stmt->bindValue(5, $model->kilometragem);
        $stmt->bindValue(6, $model->revisao);
        $stmt->bindValue(7, $model->sinistro);
        $stmt->bindValue(8, $model->roubo_furto);
        $stmt->bindValue(9, $model->aluguel);
        $stmt->bindValue(10, $model->venda);
        $stmt->bindValue(11, $model->particular);
        $stmt->bindValue(12, $model->observacao);
        $stmt->bindValue(13, $model->id_Marca);
        $stmt->bindValue(14, $model->id_Fabricante);
        $stmt->bindValue(15, $model->id_TipoDeVeiculo);
        $stmt->bindValue(16, $model->id_Combustivel);
        $stmt->bindValue(17, $model->id);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT v.id, v.modelo, v.ano_fabricado, v.numero_chassi, v.cor, v.kilometragem, v.revisao, v.sinistro, 
        v.roubo_furto, v.aluguel, v.venda, v.particular, v.observacao, 
        m.nome AS marca, f.nome AS fabricante, t.nome AS tipo_veiculo, c.nome AS combustivel
        FROM veiculo v
        JOIN Marca m ON (m.id = v.id_Marca),
        JOIN Fabricante f ON (f.id = v.id_Fabricante),
        JOIN TipoDeVeiculo t ON (t.id = v.id_TipoDeVeiculo), 
        JOIN Combustivel c ON (c.id = v.id_Combustivel)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectById(int $id)
    {
        $sql = "SELECT v.id, v.modelo, v.ano_fabricado, v.numero_chassi, v.cor, v.kilometragem, v.revisao, v.sinistro, 
        v.roubo_furto, v.aluguel, v.venda, v.particular, v.observacao, 
        m.nome AS marca, f.nome AS fabricante, t.nome AS tipo_veiculo, c.nome AS combustivel
        FROM veiculo v
        JOIN Marca m ON (m.id = v.id_Marca),
        JOIN Fabricante f ON (f.id = v.id_Fabricante),
        JOIN TipoDeVeiculo t ON (t.id = v.id_TipoDeVeiculo), 
        JOIN Combustivel c ON (c.id = v.id_Combustivel)
        WHERE v.id=?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CadastroVeiculos\Model\VeiculoModel");
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Veiculo WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}