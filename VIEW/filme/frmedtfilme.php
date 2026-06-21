<?php
$id = $_GET['id'];

include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/filme.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/filme.php';

use DAL\Cliente;

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
    <title>Editar Cliente</title>
</head>

<body>
    <div class="container center grey darken-2 white-text">
        <h3>Editar Filme</h3>
        <div class="row grey lighten-2 black-text">
            <form action="opedtfilme.php" method="post" class="row">
                <div class="input-field">
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>
                </br>
                <div class="input-field">
                    <input type="text" name="titulo" id="titulo" value="<?php echo $filme->getTitulo(); ?>" required>
                    <label for="titulo">Título</label>
                </div>
                <div class="input-field">
                    <input type="text" name="lancamento" id="lancamento" value="<?php echo $filme->getLancamento(); ?>" required>
                    <label for="lancamento">Lançamento</label>
                </div>
                <div class="input-field">
                    <input type="text" name="genero" id="genero" value="<?php echo $filme->getGenero(); ?>" required>
                    <label for="genero">Gênero</label>
                </div>
                <div class="input-field ">
                    <input type="text" name="estoque" id="estoque" value="<?php echo $filme->getEstoque(); ?>" required>
                    <label for="estoque">Estoque</label>
                </div>
                <a class="waves-effect waves-light blue btn"
                    onclick="JavaScript:location.href='lstfilme.php'">
                    <i class="material-icons right">arrow_back</i>Voltar
                </a>
                <button class="btn waves-effect waves-light" type="submit">Salvar</button>
            </form>
        </div>
    </div>
</body>

</html>