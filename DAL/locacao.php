<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/conexao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/locacao.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/cliente.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/filme.php';

class Locacao
{

    public function Select()
    {

        $locacoes = array();

        $sql = "SELECT  locacoes.*,  cliente.nome AS nome_cliente,  filmes.titulo AS titulo_filme 
       FROM  locacoes 
       INNER JOIN cliente ON locacoes.cliente = cliente.id
       INNER JOIN filmes ON locacoes.filme = filmes.id
       ORDER BY locacoes.data_locacao DESC; 
       ";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($registros as $linha) {
            $locacao = new \MODEL\Locacao();
            $locacao->setId($linha['id']);
            $locacao->setCliente($linha['cliente']);
            $locacao->setNomeCliente((string)$linha['nome_cliente']);
            $locacao->setTituloFilme((string)$linha['titulo_filme']);
            if (!empty($linha['data_locacao'])) {
                $locacao->setDataLocacao(new \DateTime($linha['data_locacao']));
            }
            if (!empty($linha['data_devolucao'])) {
                $locacao->setDataDevolucao(new \DateTime($linha['data_devolucao']));
            }
            $locacoes[] = $locacao;
        }
        return $locacoes;
    }

    public function SelectById(int $id)
    {
        $sql = "SELECT * FROM locacoes WHERE id = ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        $locacao = new \MODEL\Locacao();
        $locacao->setId($linha['id']);
        $locacao->setCliente($linha['cliente']);
        $locacao->setNomeCliente((string)$linha['cliente']);
        $locacao->setFilme($linha['filme']);
        $locacao->setTituloFilme((string)$linha['filme']);
        $locacao->setDataLocacao(new \DateTime($linha['data_locacao']));
        $locacao->setDataDevolucao(new \DateTime($linha['data_devolucao']));

        return $locacao;
    }

    public function Insert(\MODEL\Locacao $locacao)
    {
        $sql = "INSERT INTO locacoes (cliente, filme, data_locacao, data_devolucao) VALUES (?, ?, ?, ?);";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array(
            $locacao->getCliente(),
            $locacao->getFilme(),
            $locacao->getDataLocacao()->format('Y-m-d'),
            $locacao->getDataDevolucao()->format('Y-m-d')
        ));
        $con = Conexao::desconectar();
    }

    public function Update(\MODEL\Locacao $locacao)
    {
        $sql = "UPDATE locacoes SET cliente = ?, filme = ?, data_locacao = ?, data_devolucao = ? WHERE id = ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array(
            $locacao->getCliente(),
            $locacao->getFilme(),
            $locacao->getDataLocacao()->format('Y-m-d'),
            $locacao->getDataDevolucao()->format('Y-m-d'),
            $locacao->getId()
        ));
        $con = Conexao::desconectar();
    }

    public function Delete(int $_id)
    {
        $sql = "DELETE FROM locacoes WHERE id = ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($_id));
        $con = Conexao::desconectar();
    }
}
