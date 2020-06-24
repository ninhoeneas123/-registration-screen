<?php

$host = "localhost";
$banco = "cadastro";
$usuario = "root";
$senh = "";

$mysqli;

function abrirConexao(){
	global $mysqli, $host, $usuario, $senh, $banco;
	$mysqli = new mysqli($host,$usuario,$senh,$banco);

	if($mysqli->connect_errno) {
		exit();
	}
}

function fecharConexao(){
	global $mysqli;
	$mysqli->close();
}

?>