<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/filme.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/filme.php';

$filme = new MODEL\Filme();

$filme->setTitulo($_POST['titulo']);
$filme->setLancamento($_POST['lancamento']);
$filme->setGenero($_POST['genero']);
$filme->setSituacao($_POST['situacao']);

$dalFilme = new DAL\Filme();
$dalFilme->Insert($filme);

header("Location: lstfilme.php");