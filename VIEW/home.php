<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movie Station</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Usado para adicionar ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="fundo">
    <?php
    include_once __DIR__ . "/header.php";
    ?>
    <div class="container center">
        <div class="brown darken-2 ">
            <h2 class="center-align">Bem Vindo Movie Station</h2>
        </div>
        <div class="row">

            <div class="col s12 m6 l4">
                <div class="card brown white-text">
                    <div class="card-content center">
                        <span class="card-title">Clientes</span>
                        <p>Gerencie os clientes da locadora</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="card brown white-text">
                    <div class="card-content center">
                        <span class="card-title">Filmes</span>
                        <p>Gerencie o catálogo de filmes</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <div class="card brown white-text">
                    <div class="card-content center">
                        <span class="card-title">Locações</span>
                        <p>Controle empréstimos e devoluções</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php
    include_once __DIR__ . "/footer.php";
    ?>
    </div>
</body>


</html>