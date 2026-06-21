<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Usado para adicionar ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Locação</title>
</head>

<body>
    <div class="container center grey darken-2 white-text">
        <h3>Inserir Locação</h3>
        <div class="row grey lighten-2 black-text">
            </br>
            <form action="opinslocacao.php" method="post">
                <div class="input-field">
                    <input type="text" name="cliente" id="cliente" required>
                    <label for="cliente">Cliente</label>
                </div>
                <div class="input-field">
                    <input type="text" name="filme" id="filme" required>
                    <label for="filme">Filme</label>
                </div>
                <div class="input-field">
                    <input type="date" name="data_locacao" id="data_locacao" required>
                    <label for="data_locacao">Data de Locação</label>
                </div>
                <div class="input-field">
                    <input type="date" name="data_devolucao" id="data_devolucao" required>
                    <label for="data_devolucao">Data de Devolução</label>
                </div>
                <a class="waves-effect waves-light blue btn"
                    onclick="JavaScript:location.href='lstlocacao.php'">
                    <i class="material-icons right">arrow_back</i>Voltar
                </a>
                <button class="btn waves-effect waves-light" type="submit">Inserir</button>
            </form>
        </div>
</body>

</html>