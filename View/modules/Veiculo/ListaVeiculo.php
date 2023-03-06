<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Veículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/../../css/style_list.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/fa2d8a584c.js" crossorigin="anonymous"></script>
</head>
<body>

    <h1>Lista de Veículos</h1>

    <table class="table table-bordered">
        <thead>
            <tr style="background-color: #87CEEB;">
                <th scope="col">ID</th>
                <th scope="col">Modelo</th>
                <th scope="col">Ano_Fabricado</th>
                <th scope="col">Número_Chassi</th>
                <th scope="col">Cor</th>
                <th scope="col">Kilometragem</th>
                <th scope="col">Revisão</th>
                <th scope="col">Sinistro</th>
                <th scope="col">Roubo_Furto</th>
                <th scope="col">Aluguel</th>
                <th scope="col">Venda</th>
                <th scope="col">Particular</th>
                <th scope="col">Observação</th>
                <th scope="col">Marca</th>
                <th scope="col">Fabricante</th>
                <th scope="col">TipoDeVeículo</th>
                <th scope="col">Combustível</th>
                <th scope="col">Atualizar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>

        <tbody class="table-group-divider">
        <?php foreach($model->rows as $item) : ?>
            <tr>
                <td>
                    <?= $item['id'] ?>
                </td>

                <td>
                    <?= $item['modelo'] ?>
                </td>

                <td>
                    <?= $item['ano_fabricado'] ?>
                </td>

                <td>
                    <?= $item['numero_chassi'] ?>
                </td>

                <td>
                    <?= $item['cor'] ?>
                </td>

                <td>
                    <?= $item['kilometragem'] ?>
                </td>

                <td>
                    <?= $item['revisao'] ?>
                </td>

                <td>
                    <?= $item['sinistro'] ?>
                </td>

                <td>
                    <?= $item['roubo_furto'] ?>
                </td>

                <td>
                    <?= $item['aluguel'] ?>
                </td>

                <td>
                    <?= $item['venda'] ?>
                </td>

                <td>
                    <?= $item['particular'] ?>
                </td>

                <td>
                    <?= $item['observacao'] ?>
                </td>

                <td>
                    <?= $item['marca'] ?>
                </td>

                <td>
                    <?= $item['fabricante'] ?>
                </td>

                <td>
                    <?= $item['tipo_veiculo'] ?>
                </td>

                <td>
                    <?= $item['combustivel'] ?>
                </td>

                <td>
                    <a class="btn btn-outline-primary btn-sm edit" href="/veiculo/form?id=<?= $item['id'] ?>"><i class="fa-solid fa-pen"></i></a>
                </td>

                <td>
                    <a class="btn btn-outline-danger btn-sm edit" href="/veiculo/delete?id=<?= $item['id'] ?>"><i class="fa-solid fa-trash"></i></a>        
                </td>
            </tr>
            
            <?php endforeach ?>
        </tbody>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
            
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
</body>
</html>