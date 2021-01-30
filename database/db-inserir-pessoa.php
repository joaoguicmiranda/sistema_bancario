<?php   
require_once '../classes/autoload.inc.php';

$nome = $_POST['nome'];
$cpf =  $_POST['cpf'];
$rg = $_POST['rg'];

$pessoa = new PessoaDAO();
$pessoa->setNome($nome);
$pessoa->setCpf($cpf);
$pessoa->setRg($rg);

$pessoa->adicionar();

header("Location: ../view/cadastro-cliente.php");
?>
