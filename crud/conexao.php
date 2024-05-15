<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'agendamento';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die ("Não foi possivel conectar")
?>