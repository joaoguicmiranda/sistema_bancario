<?php
    class Conta {
        private $saldo;
        private $limite;
        private $pessoa;
        private $agencia;
     
        function setLimite($limite){
            $this->limite = $limite;
        }

        function getLimite(){
            return $this->limite;
        }

        function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        function getSaldo(){
            return $this->saldo;
        }

        function setPessoa($pessoa){
            $this->pessoa = $pessoa;
        }

        function getPessoa(){
            return $this->pessoa;
        }

        function setAgencia($agencia){
            $this->agencia = $agencia;
        }

        function getAgencia(){
            return $this->agencia;
        }
    }