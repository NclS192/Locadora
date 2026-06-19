<?php
$id = $_GET['id'];

include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/DAL/cliente.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/MODEL/cliente.php";

use DAL\Cliente;


$dalCliente = new DAL\Cliente();
$cliente = $dalCliente->SelectById($id);

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
    <title>Detalhes de Cliente</title>
</head>

<body class="teal lighten-4">
    <div class="container center grey darken-2 white-text">
        <h3>Informações de Cliente</h3>

        <div class="row grey lighten-2 black-text">
            <form action="opedtcliente.php" method="post" class="row">
                <div class="input-field col s1">
                    <label for="id" class="black-text bold">ID: <?php echo $cliente->getID() ?>
                    </label>
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s2">
                    <label for="nomelabel" class="black-text bold">Nome: <?php echo $cliente->getNome() ?> </label>
                </div>
                <div class="input-field col s3">
                    <label for="cpflabel" class="black-text bold">CPF: <?php echo $cliente->getCpf() ?> </label>
                </div>
                <div class="input-field col s4">
                    <label for="telefonelabel" class="black-text bold">Telefone: <?php echo $cliente->getTelefone() ?> </label>
                </div>
                <a class="waves-effect waves-light blue btn"
                    onclick="JavaScript:location.href='lstcliente.php'">
                    <i class="material-icons right">arrow_back</i>Voltar
                </a>
        </div>
        </form>


    </div>
    <br />

    </div>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir Cliente ' + id + '?')) {
            location.href = 'opremcliente.php?id=' + id;
        }
    }
</script>