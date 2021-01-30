<?php
	require_once '../classes/autoload.inc.php';

	$id = $_GET['nro_conta'];

	$pessoa = new ContaDAO();
	$pessoa->excluir($id);

	header("Location: ../view/lista-contas.php");
?>