<?php
    namespace MODEL;

    class Filme{
        private ?int $id;
        private ?string $titulo;
        private ?string $genero;
        private ?int $lancamento;
        private ?int $estoque;

        public function __construct(){
           
        }

        public function getId(){return $this->id;}
        public function getTitulo(){return $this->titulo;}
        public function getGenero(){return $this->genero;}
        public function getLancamento(){return $this->lancamento;}
        public function getEstoque(){return $this->estoque;}

        public function setId(int $id){$this->id = $id;}
        public function setTitulo(string $titulo){$this->titulo = $titulo;}
        public function setGenero(string $genero){$this->genero = $genero;}
        public function setLancamento(int $lancamento){$this->lancamento = $lancamento;}
        public function setEstoque(int $estoque){$this->estoque = $estoque;}


    }
?>