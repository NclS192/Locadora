<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/locacao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/locacao.php';

$locacao = new MODEL\Locacao();

$locacao->setCliente($_POST['cliente']);
$locacao->setFilme($_POST['filme']);
$locacao->setDataLocacao(new \DateTime($_POST['data_locacao']));
$locacao->setDataDevolucao(new \DateTime($_POST['data_devolucao']));

$dalLocacao = new DAL\Locacao();
$dalLocacao->Insert($locacao);

header("Location: lstlocacao.php");