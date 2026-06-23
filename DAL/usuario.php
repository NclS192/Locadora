<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/conexao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/usuario.php';

class Usuario
{

    public function Select()
    {

        $usuarios = array();

        $sql = "SELECT * FROM usuario;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($registros as $linha) {
            $usuario = new \MODEL\Usuario();
            $usuario->setId($linha['id']);
            $usuario->setLogin($linha['login']);
            $usuarios[] = $usuario;
        }
        return $usuarios;
    }

    public function SelectById(int $id)
    {
        $sql = "SELECT * FROM usuario WHERE id = ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        $usuario = new \MODEL\Usuario();
        $usuario->setId($linha['id']);
        $usuario->setLogin($linha['login']);

        return $usuario;
    }

    public function SelectByLogin(string $login)
    {
        $sql = "SELECT * FROM usuario WHERE login = ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($login));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        $usuario = new \MODEL\Usuario();
        $usuario->setId($linha['id']);
        $usuario->setLogin($linha['login']);
        $usuario->setSenha($linha['senha']);

        return $usuario;
    }

    public function Insert(\MODEL\Usuario $usuario)
    {
        $sql = "INSERT INTO usuario (login, senha) VALUES (?, ?);";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array(
            $usuario->getLogin(),
            md5($usuario->getSenha()),
        ));
        $con = Conexao::desconectar();
    }

    public function Update(\MODEL\Usuario $usuario)
    {
        $sql = "UPDATE usuario SET login = ?, senha = ? WHERE id = ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array(
            $usuario->getLogin(),
            md5($usuario->getSenha()),
            $usuario->getId(),
        ));
        $con = Conexao::desconectar();
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM usuario WHERE id = ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
    }
}
