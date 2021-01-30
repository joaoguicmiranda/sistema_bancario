<?php   
require_once '../classes/autoload.inc.php';

$saldo = $_POST['saldo'];
$limite =  $_POST['limite'];
$nroPessoa = $_POST['pessoa'];
$nroAgencia = $_POST['agencia'];

$conta = new ContaDAO();
$conta->setSaldo($saldo);
$conta->setLimite($limite);
$conta->setPessoa($nroPessoa);
$conta->setAgencia($nroAgencia);

$conta->adicionar();

header("Location: ../view/cadastro-conta.php");
?>
