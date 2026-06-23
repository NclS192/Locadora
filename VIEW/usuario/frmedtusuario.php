<?php
$id = $_GET['id'];

include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/usuario.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/usuario.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/VIEW/footer.php';


$dalUsuario = new DAL\Usuario();
$usuario = $dalUsuario->SelectById($id);
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
    <title>Editar Usuário</title>
</head>

<body class="brown darken-2">
    <div class="container center grey darken-2 white-text">
        <h3>Editar Usuário</h3>
        <div class="row grey lighten-2 black-text">
            <form action="opedtusuario.php" method="post" class="row">
                <div class="input-field">
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>
                </br>
                <div class="input-field">
                    <input type="text" name="login" id="login" value="<?php echo $usuario->getLogin(); ?>" required>
                    <label for="login">Login</label>
                </div>
                <div class="input-field">
                    <input type="text" name="senha" id="senha" value="" required>
                    <label for="senha">senha</label>
                </div>
                <a class="waves-effect waves-light blue btn"
                    onclick="JavaScript:location.href='lstusuario.php'">
                    <i class="material-icons right">arrow_back</i>Voltar
                </a>
                <button class="btn waves-effect waves-light" type="submit">Salvar</button>
            </form>
        </div>
    </div>
</body>

</html>