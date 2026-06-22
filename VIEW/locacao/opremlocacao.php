<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/locacao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/locacao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/filme.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/filme.php';

$id = $_GET['id'];

$dalLocacao = new DAL\Locacao();
$locacao = $dalLocacao->SelectById($id);

$dalFilme = new DAL\Filme();
$filme = $dalFilme->SelectById($locacao->getFilme());

$filme->setEstoque($filme->getEstoque() + 1);
$dalFilme->Update($filme);
$dalLocacao->Delete($id);


header("Location: lstlocacao.php");
