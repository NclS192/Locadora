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
    <title>Inserir Cliente</title>
</head>

<body>
    <div class="container center grey darken-2 white-text">
        <h3>Inserir Cliente</h3>
        <div class="row grey lighten-2 black-text">
            </br>
            <form action="opinscliente.php" method="post">
                <div class="input-field">
                    <input type="text" name="nome" id="nome" required>
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field">
                    <input type="text" name="cpf" id="cpf" required>
                    <label for="cpf">CPF</label>
                </div>
                <div class="input-field">
                    <input type="text" name="telefone" id="telefone" required>
                    <label for="telefone">Telefone</label>
                </div>
                <a class="waves-effect waves-light blue btn"
                    onclick="JavaScript:location.href='lstcliente.php'">
                    <i class="material-icons right">arrow_back</i>Voltar
                </a>
                <button class="btn waves-effect waves-light" type="submit">Inserir</button>
            </form>
        </div>
</body>

</html>