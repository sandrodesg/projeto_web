<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

session_start();
include_once("conexao.php");

$nome =  $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$dt = $_POST['dtnasc'];
$cep = $_POST['cep'];
$end = $_POST['endereco'];
$msg = $_POST['msg'];



	$result = mysql_query("INSERT INTO usuario (nome,email,telefone,datanasc,cep,endereco,mensagem) VALUES ('$nome','$email','$tel','$dt','$cep','$end','$msg')");
	
	if(mysql_affected_rows() != 0){
		header("Location:cadastro.php");
		$_SESSION['msgCad'] = "Obrigado pela preferência,entraremos em contato!";
	}
?>