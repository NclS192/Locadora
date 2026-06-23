<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/filme.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/filme.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/footer.php';


$dalFilme = new DAL\Filme();

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
    <title>Filmes</title>
</head>

<body class="brown darken-2">
    <div class="container center grey darken-2 white-text">
        <h1 class="center-align">Lista de Filmes</h1>
        <div class="row grey lighten-2 black-text">
            <table class="striped responsive-table hover: ">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Lançamento</th>
                        <th>Gênero</th>
                        <th>Situação</th>
                        <th> <a class="btn-floating btn-small waves-effect waves-light green">
                                <i class="material-icons"
                                    onclick="JavaScript:location.href='frmisfilme.php'">add</i>
                            </a></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($dalFilme->Select() as $filme) { ?>
                        <tr>
                            <td><?php echo $filme->getId(); ?></td>
                            <td><?php echo $filme->getTitulo(); ?></td>
                            <td><?php echo $filme->getLancamento(); ?></td>
                            <td><?php echo $filme->getGenero(); ?></td>
                            <td><?php echo $filme->getSituacao(); ?></td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light green">
                                    <i class="material-icons"
                                        onclick="JavaScript:location.href='frmedtfilme.php?id=<?php echo $filme->getId(); ?>'">edit</i>
                                </a></td>
                            <td> <a class="btn-floating btn-small waves-effect waves-light yellow darken-2">
                                    <i class="material-icons"
                                        onclick="JavaScript:location.href='frmdetfilme.php?id=<?php echo $filme->getId(); ?>'">details</i>
                                </a></td>
                            <td> <a class="btn-floating btn-small waves-effect red">
                                    <i class="material-icons"
                                        onclick="JavaScript: remover( <?php echo $filme->getId(); ?> )">delete</i>
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
        if (confirm('Excluir Filme ' + id + '?')) {
            location.href = 'opremfilme.php?id=' + id;
        }
    }
</script>