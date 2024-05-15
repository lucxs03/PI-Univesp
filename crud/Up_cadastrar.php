<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastrar</title>

	</head>
	<body>
		<h1>Confirmação de Cadastro</h1>
		<p>
			<?php
include('conexao.php');
				
				$nome = $_POST['nome'];			
				$email = $_POST['email'];
				$telefone = $_POST['telefone'];
				$rua = $_POST['rua'];
				$numero = $_POST['numero'];
				$bairro = $_POST['bairro'];
				$cidade = $_POST['cidade'];
				$cpf = $_POST['cpf'];
				$consulta = $_POST['consulta'];
				$data = $_POST['data'];
				$senha = $_POST['senha'];
		
				
				
				if($nome == "" or $email == ""  or $telefone == ""  or  $rua == ""  or  $numero == ""  
				or  $bairro == "" or  $cidade == "" or $cpf ==  "" or $consulta ==  "" or $data ==  "" or $senha == "")
				{
					echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
					echo "<p><a href='cadastrar.php'>Cadastrar</a></p>";
				}
				else{
														
					$sql = "insert into tab_cadastro values (null,'$nome', '$email', '$telefone', '$rua', '$numero', '$bairro', '$cidade', '$cpf', '$consulta', '$data', '$senha')";
					
					$result = $conexao->query( $sql );
					echo "Cadastrado realizado com Sucesso!!!";
					
				}
				
			?>
		</p>
		<p><a href="../index.php">Voltar Para Home</a></p>
	</body>
</html>