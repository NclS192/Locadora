<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/DAL/cliente.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/MODEL/cliente.php";

$cliente = new MODEL\Cliente();
$cliente->setId($_POST['id']);
$cliente->setNome($_POST['nome']);
$cliente->setCpf($_POST['cpf']);
$cliente->setTelefone($_POST['telefone']);

$dalCliente = new DAL\Cliente();
$dalCliente->Update($cliente);

header("location: lstcliente.php");
