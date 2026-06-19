<?php
    namespace MODEL;

    class Locacao{
        private ?int $id;
        private ?string $cliente;
        private ?int $data_locacao;
        private ?int $data_devolucao;

        public function __construct(){
           
        }

        public function getId(){return $this->id;}
        public function getCliente(){return $this->cliente;}
        public function getDataLocacao(){return $this->data_locacao;}
        public function getDataDevolucao(){return $this->data_devolucao;}

        public function setId(int $id){$this->id = $id;}
        public function setCliente(string $cliente){$this->cliente = $cliente;}
        public function setDataLocacao(int $data_locacao){$this->data_locacao = $data_locacao;}
        public function setDataDevolucao(int $data_devolucao){$this->data_devolucao = $data_devolucao;}


    }
?>