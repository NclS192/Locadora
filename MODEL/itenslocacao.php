<?php
    namespace MODEL;

    class ItensLocacao{
        private ?int $id;
        private ?string $locacao;
        private ?string $filme;
        private ?int $quantidade;

        public function __construct(){
           
        }

        public function getId(){return $this->id;}
        public function getLocacao(){return $this->locacao;}
        public function getFilme(){return $this->filme;}
        public function getQuantidade(){return $this->quantidade;}

        public function setId(int $id){$this->id = $id;}
        public function setLocacao(string $locacao){$this->locacao = $locacao;}
        public function setFilme(string $filme){$this->filme = $filme;}
        public function setQuantidade(int $quantidade){$this->quantidade = $quantidade;}


    }
?>