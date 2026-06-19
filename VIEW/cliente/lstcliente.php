<?php 
    include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/cliente.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/cliente.php';

    $dalCliente = new DAL\Cliente();

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
<body>
    <h1 class="center-align">Lista de Clientes</h1>
    <div class="container">
        <table class="striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($dalCliente->Select() as $cliente){ ?>
                    <tr>
                        <td><?php echo $cliente->getId(); ?></td>
                        <td><?php echo $cliente->getNome(); ?></td>
                        <td><?php echo $cliente->getCpf(); ?></td>
                        <td><?php echo $cliente->getTelefone(); ?></td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</body>
</html>