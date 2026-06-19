<?php
    namespace MODEL;

    class Agricultor{
        private ?int $id;
        private ?string $nome;
        private ?string $cidade;
        private ?string $bairro;
        private ?int $idade;

        public function __construct(){
           
        }

        public function getId(){return $this->id;}
        public function getNome(){return $this->nome;}
        public function getCidade(){return $this->cidade;}
        public function getBairro(){return $this->bairro;}
        public function getIdade(){return $this->idade;}

        public function setId(int $id){$this->id = $id;}
        public function setNome(string $nome){$this->nome = $nome;}
        public function setCidade(string $cidade){$this->cidade = $cidade;}
        public function setBairro(string $bairro){$this->bairro = $bairro;}
        public function setIdade(int $idade){$this->idade = $idade;}


    }
?>