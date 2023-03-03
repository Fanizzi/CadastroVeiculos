<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Combustíveis</title>
</head>
<body>

    <h1>Lista de Combustíveis</h1>

    <table>

        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>

            <td>
                <a href="/combustivel/delete?id=<?= $item['id'] ?>">X</a>
            </td>

            <td><?= $item['id'] ?></td>

            <td>
                <a href="/combustivel/form?id=<?= $item['id'] ?>"><?= $item['nome'] ?></a>
            </td>

        </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>