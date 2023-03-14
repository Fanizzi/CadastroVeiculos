<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fa2d8a584c.js" crossorigin="anonymous"></script>
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

        <div class="form-group">

            <input type="hidden" value="<?= $model->id ?>" name="id"> 

            <label for="marca">Marca:</label>
            <select name="marca" class="form-select">
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

            <label for="numero_chassi">Número Chassi:</label>
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
        

    </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
</body>
</html>