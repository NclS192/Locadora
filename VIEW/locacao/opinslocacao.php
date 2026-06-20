<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/locacao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/locacao.php';

$locacao = new MODEL\Locacao();

$locacao->setCliente($_POST['cliente']);
$locacao->setDataLocacao($_POST['locacao']);
$locacao->setdataDevolucao($_POST['devolucao']);

$dalLocacao = new DAL\Locacao();
$dalLocacao->Insert($locacao);

header("Location: lstlocacao.php");