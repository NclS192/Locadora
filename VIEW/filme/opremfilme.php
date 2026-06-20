<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/filme.php';

$id = $_GET['id'];

$filme = new DAL\Filme();
$filme->Delete($id);

header("Location: lstfilme.php");