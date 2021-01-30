<?php
    class Pessoa {
        private $nome;
        private $cpf;
        private $rg;
        
        function getNome(){
            return $this->nome;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        function getCpf(){
            return $this->cpf;
        }

        function setCpf($cpf){
            $this->cpf = $cpf;
        }

        function getRg(){
            return $this->rg;
        }

        function setRg($rg){
            $this->rg = $rg;
        }
    }
