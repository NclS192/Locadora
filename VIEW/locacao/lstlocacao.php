<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/locacao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/locacao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/footer.php';

$dalLocacao = new DAL\Locacao();

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
    <title>Locações</title>
</head>

<body class="brown darken-2">
    <div class="container center grey darken-2 white-text">
        <h1 class="center-align">Lista de Locações</h1>
        <div class="row grey lighten-2 black-text">
            <table class="striped responsive-table hover: ">
                <thead>
                    <tr>
                        <th>ID Locação</th>
                        <th>Nome Cliente</th>
                        <th>Titulo Filme</th>
                        <th>Data de Locação</th>
                        <th>Data de Devolução</th>
                        <th> <a class="btn-floating btn-small waves-effect waves-light green">
                                <i class="material-icons"
                                    onclick="JavaScript:location.href='frmislocacao.php'">add</i>
                            </a></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($dalLocacao->Select() as $locacao) { ?>
                        <tr>
                            <td><?php echo $locacao->getId(); ?></td>
                            <td><?php echo $locacao->getNomeCliente(); ?></td>
                            <td><?php echo $locacao->getTituloFilme(); ?></td>
                            <td><?php echo $locacao->getDataLocacao()->format('d/m/Y'); ?> </td>
                            <td><?php echo $locacao->getDataDevolucao()->format('d/m/Y'); ?> </td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light green">
                                    <i class="material-icons"
                                        onclick="JavaScript:location.href='frmedtlocacao.php?id=<?php echo $locacao->getId(); ?>'">edit</i>
                                </a></td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light yellow darken-2">
                                    <i class="material-icons"
                                        onclick="JavaScript:location.href='frmdetlocacao.php?id=<?php echo $locacao->getId(); ?>'">details</i>
                                </a></td>
                            <td> <a class="btn-floating btn-small waves-effect red">
                                    <i class="material-icons"
                                        onclick="JavaScript: remover( <?php echo $locacao->getId(); ?> )">delete</i>
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
        if (confirm('Excluir Locação ' + id + '?')) {
            location.href = 'opremlocacao.php?id=' + id;
        }
    }
</script>