<?php
    namespace MODEL;
    use dateTime;

    class Locacao{
        private ?int $id;
        private ?int $cliente;
        private ?string $nome_cliente;
        private ?int $filme;
        private ?string $titulo_filme;
        private ?dateTime $data_locacao;
        private ?dateTime $data_devolucao;

        public function __construct(){
           
        }

        public function getId(){return $this->id;}
        public function getCliente(){return $this->cliente;}
        public function getNomeCliente(){return $this->nome_cliente;}
        public function getFilme(){return $this->filme;}
        public function getTituloFilme(){return $this->titulo_filme;}
        public function getDataLocacao(){return $this->data_locacao;}
        public function getDataDevolucao(){return $this->data_devolucao;}

        public function setId(int $id){$this->id = $id;}
        public function setCliente(int $cliente){$this->cliente = $cliente;}
        public function setNomeCliente(string $nome_cliente){$this->nome_cliente = $nome_cliente;}
        public function setFilme(int $filme){$this->filme = $filme;}
        public function setTituloFilme(string $titulo_filme){$this->titulo_filme = $titulo_filme;}
        public function setDataLocacao(dateTime $data_locacao){$this->data_locacao = $data_locacao;}
        public function setDataDevolucao(dateTime $data_devolucao){$this->data_devolucao = $data_devolucao;}


    }
?>