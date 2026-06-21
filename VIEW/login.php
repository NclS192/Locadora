<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/DAL/usuario.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/Locadora/MODEL/usuario.php";
$login = $_POST['login'];
$pwd = $_POST['pwd'];
$md5 = md5($pwd);

if ($login == "" || $pwd == "")
    header("location:index.php");

$dalUsuario = new \DAL\Usuario();
$usuario = $dalUsuario->SelectBylogin($login);

if ($md5 == $usuario->getSenha()) {
    session_start();
    $_SESSION['login'] = $usuario;
    header("location:home.php");
} else  header("location:index.php");
