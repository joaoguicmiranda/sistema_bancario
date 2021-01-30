<?php
include_once 'autoload.inc.php';
include_once '../interfaces/IDatabase.php';

class PessoaDAO extends Pessoa implements IDatabase
{
    function adicionar()
    {
        $sql = "INSERT INTO pessoa (nome, cpf, rg) VALUES (:nome, :cpf, :rg)";

        $stmt = Conexao::prepare($sql);
        $stmt->execute(array(
            ':nome' => $this->getNome(),
            ':cpf' => $this->getCpf(),
            ':rg' => $this->getRg()
        ));
    }

    function alterar($id)
    {
        $sql = "UPDATE pessoa SET nome = :nome, cpf = :cpf, rg = :rg WHERE pessoa.nro_pessoa = :nro_pessoa";

        $stmt = Conexao::prepare($sql);
        $stmt->execute(array(
            ':nro_pessoa' => $id,
            ':nome' => $this->getNome(),
            ':cpf' => $this->getCpf(),
            ':rg' => $this->getRg()
        ));
    }

    function buscar($id)
    {
        $sql = "SELECT * FROM pessoa WHERE nro_pessoa = :nro_pessoa";

        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(":nro_pessoa", $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    function excluir($id)
    {
        $sql = "DELETE FROM pessoa WHERE nro_pessoa = :nro_pessoa";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(":nro_pessoa", $id);
        $stmt->execute();
    }

    function listar()
    {
        $sql = "SELECT * FROM pessoa";

        $stmt = Conexao::prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
}
