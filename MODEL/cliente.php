<?php
    namespace MODEL;

    class Cliente{
        private ?int $id;
        private ?string $nome;
        private ?int $cpf;
        private ?int $telefone;

        public function __construct(){
           
        }

        public function getId(){return $this->id;}
        public function getNome(){return $this->nome;}
        public function getCpf(){return $this->cpf;}
        public function getTelefone(){return $this->telefone;}


        public function setId(int $id){$this->id = $id;}
        public function setNome(string $nome){$this->nome = $nome;}
        public function setCpf(int $cpf){$this->cpf = $cpf;}
        public function setTelefone(int $telefone){$this->telefone = $telefone;}

    }
?>