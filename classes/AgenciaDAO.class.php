<?php
    include_once 'autoload.inc.php';
    include_once '../interfaces/IDatabase.php';

    class AgenciaDAO extends Agencia implements IDatabase {
        function adicionar(){

        }

        function alterar($id){

        }

        function buscar($id){

        }

        function excluir($id){

        }

        function listar(){
            $sql = "SELECT * FROM agencia";   

            $stmt = Conexao::prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        }
    }
