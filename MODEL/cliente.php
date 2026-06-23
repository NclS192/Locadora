<?php
    namespace MODEL;

    class Cliente{
        private ?int $id;
        private ?string $nome;
        private ?string $cpf;
        private ?string $telefone;

        public function __construct(){
           
        }

        public function getId(){return $this->id;}
        public function getNome(){return $this->nome;}
        public function getCpf(){return $this->cpf;}
        public function getTelefone(){return $this->telefone;}


        public function setId(int $id){$this->id = $id;}
        public function setNome(string $nome){$this->nome = $nome;}
        public function setCpf(string $cpf){$this->cpf = $cpf;}
        public function setTelefone(string $telefone){$this->telefone = $telefone;}

    }
?>