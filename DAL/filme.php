<?php
    namespace DAL;

    include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/DAL/conexao.php';
    include_once $_SERVER['DOCUMENT_ROOT'] . '/Locadora/MODEL/filme.php';

    class Filme{

        public function Select(){

            $filmes = array();

            $sql = "SELECT * FROM filmes;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            $con = Conexao::desconectar();

            foreach($registros as $linha){
                $filme = new \MODEL\Filme();
                $filme->setId($linha['id']);
                $filme->setTitulo($linha['titulo']);
                $filme->setLancamento($linha['lancamento']);
                $filme->setGenero($linha['genero']);
                $filme->setEstoque($linha['estoque']);
                $filmes[] = $filme;
            }
            return $filmes;
        }

        public function SelectById(int $id){
            $sql = "SELECT * FROM filmes WHERE id = ?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $filme = new \MODEL\Filme();
            $filme->setId($linha['id']);
            $filme->setTitulo($linha['titulo']);
            $filme->setLancamento($linha['lancamento']);
            $filme->setGenero($linha['genero']);
            $filme->setEstoque($linha['estoque']);

            return $filme;
        }

        public function Insert(\MODEL\Filme $filme){
            $sql = "INSERT INTO filmes (titulo, lancamento, genero, estoque) VALUES (?, ?, ?, ?);";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array(
                $filme->getTitulo(),
                $filme->getLancamento(),
                $filme->getGenero(),
                $filme->getEstoque()
            ));
            $con = Conexao::desconectar();
        }

        public function Update(\MODEL\Filme $filme){
            $sql = "UPDATE filmes SET titulo = ?, lancamento = ?, genero = ?, estoque = ? WHERE id = ?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array(
                $filme->getTitulo(),
                $filme->getLancamento(),
                $filme->getGenero(),
                $filme->getEstoque(),
                $filme->getId()
            ));
            $con = Conexao::desconectar();
        }

        public function Delete(int $id){
            $sql = "DELETE FROM filmes WHERE id = ?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();
        }

    }