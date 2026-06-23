<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/usuario.php';

$id = $_GET['id'];

$usuario = new DAL\Usuario();
$usuario->Delete($id);

header("Location: lstusuario.php");