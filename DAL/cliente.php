<?php
    namespace DAL;

    include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/conexao.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/cliente.php';

    class Cliente{

        public function Select(){

            $clientes = array();

            $sql = "SELECT * FROM cliente;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            foreach($registros as $linha){
                $cliente = new \MODEL\Cliente();
                $cliente->setId($linha['id']);
                $cliente->setNome($linha['nome']);
                $cliente->setCpf($linha['cpf']);
                $cliente->setTelefone($linha['telefone']);
                $clientes[] = $cliente;
            }
            return $clientes;
        }
    }