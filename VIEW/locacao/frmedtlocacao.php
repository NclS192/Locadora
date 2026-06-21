<?php
$id = $_GET['id'];

include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/locacao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/locacao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/filme.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/filme.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/cliente.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/cliente.php';

$dalCLiente = new DAL\Cliente();
$lstcliente = $dalCLiente->Select();

$dalFilme = new DAL\Filme();
$lstfilme = $dalFilme->select();

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
    <title>Editar Locação</title>
</head>

<body>
    <div class="container center grey darken-2 white-text">
        <h3>Editar Locação</h3>
        <div class="row grey lighten-2 black-text">
            <form action="opedtlocacao.php" method="post" class="row">
                <div class="input-field">
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>
                </br>
                <div class="input-field ">
                    <select id="cliente" name="cliente">
                        <option value="" disabled selected>Clientes</option>
                        <?php foreach ($lstcliente as $cliente) { ?>
                            <option value="<?php echo $cliente->getId(); ?>" <?php if ($cliente->getId() == $locacao->getCliente()) echo 'selected'; ?>>
                                <?php echo $cliente->getNome(); ?>
                            </option>
                        <?php } ?>
                    </select>
                    <label for="cliente">Cliente</label>
                </div>
                <div class="input-field ">
                    <select id="filme" name="filme">
                        <option value="" disabled selected>Filmes</option>
                        <?php foreach ($lstfilme as $filme) { ?>
                            <option value="<?php echo $filme->getId(); ?>" <?php if ($filme->getId() == $locacao->getFilme()) echo 'selected'; ?>>
                                <?php echo $filme->getTitulo(); ?>
                            </option>
                        <?php } ?>
                    </select>
                    <label for="filme">Filme</label>
                </div>
                <div class="input-field">
                    <input type="date" name="data_locacao" id="data_locacao" value="<?php echo $locacao->getDataLocacao()->format('d/m/y'); ?>" required>
                    <label for="data_locacao">Data de Locação</label>
                </div>
                <div class="input-field">
                    <input type="date" name="data_devolucao" id="data_devolucao" value="<?php echo $locacao->getDataDevolucao()->format('d/m/y'); ?>" required>
                    <label for="data_devolucao">Data de Devolução</label>
                </div>
                <a class="waves-effect waves-light blue btn"
                    onclick="JavaScript:location.href='lstlocacao.php'">
                    <i class="material-icons right">arrow_back</i>Voltar
                </a>
                <button class="btn waves-effect waves-light" type="submit">Salvar</button>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            M.FormSelect.init(elems);
        });
    </script>
</body>

</html>