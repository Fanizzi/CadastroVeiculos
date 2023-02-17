<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Marcas</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>

    <form action="/marca/save" method="post">

        <h1> Cadastro de Marcas</h1>

        <div class="box">
            <div class="container">
                <fieldset>

                    <input type="hidden" value="<?= $model->id ?>" name="id" />

                    <label for="nome">Nome:</label>
                    <input name="nome" id="nome" value="<?= $model->nome ?>" type="text" /> <br>
                    
                    <button type="submit">Enviar</button>

                </fieldset>
            </div>
        </div>

    </form>
    
</body>
</html>