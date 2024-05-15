<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Excluir - Cadastro</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Confirmação de Exclusão - Cadastro</h1>
		<p>
			<?php
include('conexao.php');
				$id = $_POST['id'];	
			
				
				if($id == "")
				{
					echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
				}
				else{
		
					$sql = "DELETE FROM `tab_cadastro` WHERE `id`='$id'";
			
					$result = $conexao->query( $sql );
					echo "Usuário Excluido com Sucesso!!!";
				}
				
			?>
		</p>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>