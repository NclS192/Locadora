<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/locacao.php';

$id = $_GET['id'];

$locacao = new DAL\Locacao();
$locacao->Delete($id);

header("Location: lstlocacao.php");