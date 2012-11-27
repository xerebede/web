<?php
	include "conexao.php";

	if ($_GET['funcao'] == "gravar")
	{
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cargo = $_POST['cargo'];
		$mensagem = $_POST['mensagem'];
		
		$gravar = mysql_query("INSERT INTO depoimentos_tb (nome, email, cargo, mensagem) value ('$nome', '$email', '$cargo', '$mensagem')");
		header('Location:../index.php?pagina=cadastro');
	}

	if ($_GET['funcao'] == 'email')
	{
		header('Location:../index.php?pagina=cadastro');
	}
?>