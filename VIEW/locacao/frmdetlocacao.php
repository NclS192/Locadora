<?php
$id = $_GET['id'];

include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/DAL/locacao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/MODEL/locacao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/footer.php';


$dalLocacao = new DAL\Locacao();
$locacao = $dalLocacao->SelectById($id);
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
    <title>Detalhes da Locação</title>
</head>

<body class="brown darken-2">
    <div class="container center grey darken-2 white-text">
        <h3>Informações da Locação</h3>

        <div class="row grey lighten-2 black-text">
            <form action="opedtlocacao.php" method="post" class="row">
                <div class="input-field col s1">
                    <label for="id" class="black-text bold">ID: <?php echo $locacao->getId() ?>
                    </label>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>
                <div class="input-field col s2">
                    <label for="cliente" class="black-text bold">ID Cliente: <?php echo $locacao->getCLiente() ?>
                    </label>
                </div>
                <div class="input-field col s3">
                    <label for="filme" class="black-text bold">ID Filme: <?php echo $locacao->getFilme() ?>
                    </label>
                </div>
                <div class="input-field col s2">
                    <label for="locacao" class="black-text bold">Locação: <?php echo $locacao->getDataLocacao()->format('d/m/y') ?>
                    </label>
                </div>
                <div class="input-field col s2">
                    <label for="devolucao" class="black-text bold">Devolução: <?php echo $locacao->getDataDevolucao()->format('d/m/y') ?>
                    </label>
                </div>
                <a class="waves-effect waves-light blue btn"
                    onclick="JavaScript:location.href='lstlocacao.php'">
                    <i class="material-icons right">arrow_back</i>Voltar
                </a>
        </div>
        </form>


    </div>
    <br />

    </div>
</body>

</html>