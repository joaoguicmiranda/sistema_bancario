<?php
    interface IDatabase {
        function adicionar();
        function alterar($id);
        function buscar($id);
        function excluir($id); 
        function listar();
    }
?>