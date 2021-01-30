<?php
    class Agencia {
        private $nome;
        private $rua;
        private $bairro;

        function getNome(){
            return $this->nome;
        }

        function setNome(){
            $this->nome = $nome;
        }

        function getRua(){
           return $rua;
        }

        function setRua($bairro){
            $this->rua = $rua;
        }

        function setBairro($bairro){
            $this->bairro = $bairro;
        }

        function getBairro(){
           return $bairro;
        }
    }
?>