<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/cliente.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/cliente.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/footer.php';

$dalCliente = new DAL\Cliente();

if (isset($_GET['busca_nome']) && !empty($_GET['busca_nome'])) {
    $termo = $_GET['busca_nome'];
    $lstCliente = $dalCliente->SelectByNome($termo);
} else {
    $termo = "";
    $lstCliente = $dalCliente->Select();
}

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
    <title>Clientes</title>
</head>

<body class="brown darken-2">
    <div class="container center grey darken-2 white-text">
        <h1 class="center-align">Lista de Clientes</h1>

        <div class="row center grey darken-2 white-text">
            <form action="lstcliente.php" method="get">
                <div class="input-field col s12">
                    <input id="search" type="search" name="busca_nome" class="col s6">
                    <label for="icon_prefix">Filtrar por nome...</label>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Filtrar
                        <i class="material-icons right">search</i>
                    </button>
                </div>
            </form>
        </div>

        <div class="row grey lighten-2 black-text">
            <table class="striped responsive-table hover: ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th> <a class="btn-floating btn-small waves-effect waves-light green">
                                <i class="material-icons"
                                    onclick="JavaScript:location.href='frmiscliente.php'">add</i>
                            </a></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($lstCliente as $cliente) { ?>
                        <tr>
                            <td><?php echo $cliente->getId(); ?></td>
                            <td><?php echo $cliente->getNome(); ?></td>
                            <td><?php echo $cliente->getCpf(); ?></td>
                            <td><?php echo $cliente->getTelefone(); ?></td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light green">
                                    <i class="material-icons"
                                        onclick="JavaScript:location.href='frmedtcliente.php?id=<?php echo $cliente->getId(); ?>'">edit</i>
                                </a></td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light yellow darken-2">
                                    <i class="material-icons"
                                        onclick="JavaScript:location.href='frmdetcliente.php?id=<?php echo $cliente->getId(); ?>'">details</i>
                                </a></td>
                            <td> <a class="btn-floating btn-small waves-effect red">
                                    <i class="material-icons"
                                        onclick="JavaScript: remover( <?php echo $cliente->getId(); ?> )">delete</i>
                                </a></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
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