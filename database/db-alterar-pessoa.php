<?php
require_once '../classes/autoload.inc.php';

$id = $_POST['nro_pessoa'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

$pessoa = new PessoaDAO();
$pessoa->setNome($nome);
$pessoa->setCpf($cpf);
$pessoa->setRg($rg);

$pessoa->alterar($id); 

header("Location: ../view/lista-clientes.php");
?>