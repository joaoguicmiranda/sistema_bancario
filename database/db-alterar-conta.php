<?php
require_once '../classes/autoload.inc.php';

$id = $_POST['nro_conta'];
$saldo = $_POST['saldo'];
$limite = $_POST['limite'];

$agencia = new ContaDAO();
$agencia->setSaldo($saldo);
$agencia->setLimite($limite);

$agencia->alterar($id);

header("Location: ../view/lista-contas.php");
?>
