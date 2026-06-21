<?php
$id = $_GET['id'];

include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/cliente.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/cliente.php';

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
    <title>Editar Cliente</title>
</head>

<body>
    <div class="container center grey darken-2 white-text">
        <h3>Editar Cliente</h3>
        <div class="row grey lighten-2 black-text">
            <form action="opedtcliente.php" method="post" class="row">
                <div class="input-field">
                    <input type="hidden" name="id" value=<?php echo $id; ?>>
                </div>
                </br>
                <div class="input-field">
                    <input type="text" name="nome" id="nome" value="<?php echo $cliente->getNome(); ?>" required>
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field">
                    <input type="text" name="cpf" id="cpf" value="<?php echo $cliente->getCpf(); ?>" required>
                    <label for="cpf">CPF</label>
                </div>
                <div class="input-field ">
                    <input type="text" name="telefone" id="telefone" value="<?php echo $cliente->getTelefone(); ?>" required>
                    <label for="telefone">Telefone</label>
                </div>
                <a class="waves-effect waves-light blue btn"
                    onclick="JavaScript:location.href='lstcliente.php'">
                    <i class="material-icons right">arrow_back</i>Voltar
                </a>
                <button class="btn waves-effect waves-light" type="submit">Salvar</button>
            </form>
        </div>
    </div>
</body>

</html>