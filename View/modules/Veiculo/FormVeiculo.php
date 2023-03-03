<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículos</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>

    <form action="/veiculo/save" method="post">


    <div class="container">
        
        <h2>Cadastro de Veículos</h2>

        <input type="hidden" value="<?= $model->id ?>" name="id"> 

        <label for="marca">Marca:</label>
        <select name="marca">
            <?php foreach($model->lista_marca as $marca):?>
                <option value="<?= $marca['id']?>" <?= ($marca['id'] == $model->id_Marca) ? 'selected' : " " ?> >
                    <?= $marca['nome'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <label for="modelo">Modelo:</label>
        <input name="modelo" id="modelo" type="text" value="<?= $model->modelo ?>">

        <label for="fabricante">Fabricante:</label>
        <select name="fabricante">
            <?php foreach($model->lista_fabricante as $fabricante):?>
                <option value="<?= $fabricante['id']?>" <?= ($fabricante['id'] == $model->id_Fabricante) ? 'selected' : " " ?> >
                    <?= $fabricante['nome'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <label for="tipo">Tipo:</label>
        <select name="tipo">
        <?php foreach($model->lista_tipo as $tipo):?>
                <option value="<?= $tipo['id']?>" <?= ($tipo['id'] == $model->id_TipoDeVeiculo) ? 'selected' : " " ?> >
                    <?= $tipo['nome'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <label for="data">Ano Fabricado:</label>
        <input name="ano_fabricado" id="ano_fabricado" type="date" value="<?= $model->ano_fabricado ?>" >

        <label for="combustivel">Combustível:</label>
        <select name="combustivel">
        <?php foreach($model->lista_combustivel as $combustivel):?>
                <option value="<?= $combustivel['id']?>" <?= ($combustivel['id'] == $model->id_Combustivel) ? 'selected' : " " ?> >
                    <?= $combustivel['nome'] ?>
                </option>
            <?php endforeach ?>
        </select>

        <label for="cor">Cor:</label>
        <input name="cor" id="cor" type="text" value="<?= $model->cor ?>" >

        <label for="numeroChassi">Número Chassi:</label>
        <input name="numero_chassi" id="numero_chassi" type="text" value="<?= $model->numero_chassi ?>" >

        <label for="kilometragem">Kilometragem:</label>
        <input name="kilometragem" id="kilometragem" type="text" value="<?= $model->kilometragem ?>" >

        <label for="revisao">Revisão:</label>
        <input name="revisao" id="revisao" type="checkbox" value="<?= $model->revisao ?>">

        <label for="sinistro">Sinistro:</label>
        <input name="sinistro" id="sinistro" type="checkbox" value="<?= $model->sinistro ?>" >

        <label for="roubo_furto">Roubo/Furto:</label>
        <input name="roubo_furto" id="roubo_furto" type="checkbox" value="<?= $model->roubo_furto ?>" >

        <label for="aluguel">Aluguel:</label>
        <input name="aluguel" id="aluguel" type="checkbox" value="<?= $model->aluguel ?>" >

        <label for="venda">Venda:</label>
        <input name="venda" id="venda" type="checkbox" value="<?= $model->venda ?>" >

        <label for="particular">Particular:</label>
        <input name="particular" id="particular" type="checkbox" value="<?= $model->particular ?>" >

        <label for="observacoes">Observações:</label>
        <input name="observacao" id="observacao" type="text" value="<?= $model->observacao ?>" >

        <button type="submit">Cadastrar</button>

    </div>

    </form>
    
</body>
</html>