<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/conexao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/cliente.php';

class Cliente
{

    public function Select()
    {

        $clientes = array();

        $sql = "SELECT * FROM cliente;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($registros as $linha) {
            $cliente = new \MODEL\Cliente();
            $cliente->setId($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setCpf($linha['cpf']);
            $cliente->setTelefone($linha['telefone']);
            $clientes[] = $cliente;
        }
        return $clientes;
    }

    public function SelectById(int $id)
    {
        $sql = "SELECT * FROM cliente WHERE id = ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        $cliente = new \MODEL\Cliente();
        $cliente->setId($linha['id']);
        $cliente->setNome($linha['nome']);
        $cliente->setCpf($linha['cpf']);
        $cliente->setTelefone($linha['telefone']);

        return $cliente;
    }

    public function SelectByNome(string $nome)
    {
        $sql = "SELECT * FROM cliente WHERE nome LIKE ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(['%' . $nome . '%']);
        $registros = $query->fetchAll(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        $lstCliente = [];
        foreach ($registros as $linha) {
            $cliente = new \MODEL\Cliente();
            $cliente->setId($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setCpf($linha['cpf']);
            $cliente->setTelefone($linha['telefone']);

            $lstCliente[] = $cliente;
        }

        return $lstCliente;
    }

    public function Insert(\MODEL\Cliente $cliente)
    {
        $sql = "INSERT INTO cliente (nome, cpf, telefone) VALUES (?, ?, ?);";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array(
            $cliente->getNome(),
            $cliente->getCpf(),
            $cliente->getTelefone()
        ));
        $con = Conexao::desconectar();
    }

    public function Update(\MODEL\Cliente $cliente)
    {
        $sql = "UPDATE cliente SET nome = ?, cpf = ?, telefone = ? WHERE id = ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array(
            $cliente->getNome(),
            $cliente->getCpf(),
            $cliente->getTelefone(),
            $cliente->getId()
        ));
        $con = Conexao::desconectar();
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM cliente WHERE id = ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
    }
}
