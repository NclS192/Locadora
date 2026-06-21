<?php
$id = $_GET['id'];

include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/DAL/filme.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/MODEL/filme.php";
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/footer.php';

$dalFilme = new DAL\Filme();
$filme = $dalFilme->SelectById($id);

?>


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
    <title>Detalhes de Filme</title>
</head>

<body class="brown darken-2">
    <div class="container center grey darken-2 white-text">
        <h3>Informações de Filme</h3>

        <div class="row grey lighten-2 black-text">
            <form action="opedtfilme.php" method="post" class="row">
                <div class="input-field col s1">
                    <label for="id" class="black-text bold">ID: <?php echo $filme->getID() ?>
                    </label>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s2">
                    <label for="titulolabel" class="black-text bold">Título: <?php echo $filme->getTitulo() ?> </label>
                </div>
                <div class="input-field col s3">
                    <label for="lancamentolabel" class="black-text bold">Lançamento: <?php echo $filme->getLancamento() ?> </label>
                </div>
                <div class="input-field col s5">
                    <label for="estoquelabel" class="black-text bold">Estoque: <?php echo $filme->getEstoque() ?> </label>
                </div>
                <div class="input-field col s6">
                    <label for="generolabel" class="black-text bold">Gênero: <?php echo $filme->getGenero() ?> </label>
                </div>
                <a class="waves-effect waves-light blue btn"
                    onclick="JavaScript:location.href='lstfilme.php'">
                    <i class="material-icons right">arrow_back</i>Voltar
                </a>
        </div>
        </form>


    </div>
    <br />

    </div>
</body>

</html>