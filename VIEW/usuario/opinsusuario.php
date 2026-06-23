<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/usuario.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/usuario.php';

$usuario = new MODEL\Usuario();

$usuario->setLogin($_POST['login']);
$usuario->setSenha($_POST['senha']);

$dalusuario = new DAL\Usuario();
$dalusuario->Insert($usuario);

header("Location: lstusuario.php");