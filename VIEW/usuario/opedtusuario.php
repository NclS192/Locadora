<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/usuario.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/usuario.php';

$usuario = new MODEL\Usuario();

$usuario->setLogin($_POST['login']);
$usuario->setSenha($_POST['senha']);
$usuario->setId($_POST['id']);

$dalUsuario = new DAL\Usuario();
$dalUsuario->Update($usuario);

header("Location: lstusuario.php");