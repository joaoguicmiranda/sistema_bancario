<?php
	require_once '../classes/autoload.inc.php';

	$id = $_GET['nro_pessoa'];

	$pessoa = new PessoaDAO();
	$pessoa->excluir($id);

	header("Location: ../view/lista-clientes.php");
?>