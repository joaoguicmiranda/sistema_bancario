<?php
include_once 'autoload.inc.php';
include_once '../interfaces/IDatabase.php';

class ContaDAO extends Conta implements IDatabase
{
    function adicionar()
    {
        $sql = "INSERT INTO conta (saldo, limite, nro_agencia, nro_pessoa) 
				VALUES (:saldo, :limite, :nro_agencia, :nro_pessoa)";

        $stmt = Conexao::prepare($sql);
        $stmt->execute(array(
            ":saldo" => $this->getSaldo(),
            ":limite" => $this->getLimite(),
            ":nro_agencia" => $this->getAgencia(),
            ":nro_pessoa" => $this->getPessoa()
        ));
    }

    function alterar($id)
    {
        $sql = "UPDATE conta SET saldo = :saldo, limite = :limite WHERE conta.nro_conta = :nro_conta";

        $stmt = Conexao::prepare($sql);
        $stmt->execute(array(
            ':nro_conta' => $id,
            ':saldo' => $this->getSaldo(),
            ':limite' => $this->getLimite()
        ));
    }

    function buscar($id)
    {
        $sql = "SELECT * FROM conta WHERE nro_conta = :nro_conta";

        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(":nro_conta", $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    function excluir($id)
    {
        $sql = "DELETE FROM conta WHERE nro_conta = :nro_conta";
        $stmt = Conexao::prepare($sql);
        $stmt->bindParam(":nro_conta", $id);
        $stmt->execute();
    }

    function listar()
    {
        $sql = "SELECT * FROM conta";

        $stmt = Conexao::prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
