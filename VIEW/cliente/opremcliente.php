<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/cliente.php';

$id = $_GET['id'];

$cliente = new DAL\Cliente();
$cliente->Delete($id);

header("Location: lstcliente.php");