<?php
    namespace DAL;

    include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/conexao.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/locacao.php';

    class Locacao{

        public function Select(){

            $locacoes = array();

            $sql = "SELECT * FROM locacoes;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            foreach($registros as $linha){
                $locacao = new \MODEL\Locacao();
                $locacao->setId($linha['id']);
                $locacao->setCliente($linha['cliente']);
                $locacao->setDataLocacao($linha['data_locacao']);
                $locacao->setDataDevolucao($linha['data_devolucao']);
                $locacoes[] = $locacao;
            }
            return $locacoes;
        }

        public function SelectById(int $id){
            $sql = "SELECT * FROM locacoes WHERE id = ?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $locacao = new \MODEL\Locacao();
            $locacao->setId($linha['id']);
            $locacao->setCliente($linha['cliente']);
            $locacao->setDataLocacao($linha['data_locacao']);
            $locacao->setDataDevolucao($linha['data_devolucao']);

            return $locacao;
        }

        public function Insert(\MODEL\Locacao $locacao){
            $sql = "INSERT INTO locacoes (cliente_id, filme_id, data_locacao, data_devolucao) VALUES (?, ?, ?, ?);";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array(
                $locacao->getCliente(),
                $locacao->getDataLocacao(),
                $locacao->getDataDevolucao()
            ));
            $con = Conexao::desconectar();
        }

        public function Update(\MODEL\Locacao $locacao){
            $sql = "UPDATE locacoes SET cliente_id = ?, filme_id = ?, data_locacao = ?, data_devolucao = ? WHERE id = ?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array(
                $locacao->getCliente(),
                $locacao->getDataLocacao(),
                $locacao->getDataDevolucao(),
                $locacao->getId()
            ));
            $con = Conexao::desconectar();
        }

        public function Delete(int $_id){
            $sql = "DELETE FROM locacoes WHERE id = ?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($_id));
            $con = Conexao::desconectar();
        }
    }