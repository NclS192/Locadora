<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/DAL/locacao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/MODEL/locacao.php";

$locacao = new MODEL\Locacao();
$locacao->setId($_POST['id']);
$locacao->setCliente($_POST['cliente']);
$locacao->setDataLocacao($_POST['locacao']);
$locacao->setdataDevolucao($_POST['devolucao']);

$dalLocacao = new DAL\Locacao();
$dalLocacao->Update($locacao);

header("location: lstlocacao.php");
