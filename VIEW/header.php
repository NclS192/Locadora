<?php
session_start();
if (!isset($_SESSION['login']))
    header("Location: /Locadora/view/index.php");
?>

<header>
    <nav class=" brown darken-4" style="border:2px solid black">
        <a href="/Locadora/VIEW/home.php" class="brand-logo right"><img src="/Locadora/IMAGES/logo.jpg" height="63" width="180" class="circle"></a>
            <ul id="navbar" class="left hide-on-med-and-down">
                <li><a href="/Locadora/VIEW/home.php">Home</a></li>
                <li><a href="/Locadora/VIEW/cliente/lstcliente.php">Clientes</a></li>
                <li><a href="/Locadora/VIEW/filme/lstfilme.php">Filmes</a></li>
                <li><a href="/Locadora/VIEW/locacao/lstlocacao.php">Locação</a></li>
                <li><a href="/Locadora/VIEW/logout.php">Logout</a></li>
            </ul>
    </nav>
</header>