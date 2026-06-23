<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/DAL/filme.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/MODEL/filme.php";

$filme = new MODEL\Filme();
$filme->setId($_POST['id']);
$filme->setTitulo($_POST['titulo']);
$filme->setLancamento($_POST['lancamento']);
$filme->setGenero($_POST['genero']);
$filme->setSituacao($_POST['estoque']);

$dalFilme = new DAL\Filme();
$dalFilme->Update($filme);

header("location: lstfilme.php");
