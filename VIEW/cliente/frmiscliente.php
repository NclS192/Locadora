<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/footer.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Inclusão do jQuery-->
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <!-- Inclusão do Plugin jQuery Validation-->
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>

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

<body class="brown darken-2">
    <div class="container center grey darken-2 white-text">
        <h3>Inserir Cliente</h3>
        <div class="row grey lighten-2 black-text">
            </br>
            <form id="formularioValidaTelefoneCelular" action="opinscliente.php" method="post">
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
    </div>
    <script src="validafone.js"></script>
</body>

</html>