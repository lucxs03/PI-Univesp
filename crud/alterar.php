<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Alterar - Cadastro</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Confirmação de Alteração</h1>

			<?php
			
				
				$id = $_POST['id'];
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
				or  $bairro == "" or  $cidade == "" or $cpf == "" or $consulta == "" or $data == "" or $senha == "")
				{
					echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
					echo "<p><a href='paginicial.php'>Voltar para Pagina Inicial</a></p>";
				}
					else{
					    $mysqli = new mysqli('localhost', 'root', '', 'agendamento');
					    $sql = "UPDATE `tab_cadastro` SET `id` = '$id', `nome` = '$nome',`email`='$email',`telefone`='$telefone',`rua`='$rua',`numero`='$numero',`bairro`='$bairro',`cidade`='$cidade',`cpf`='$cpf',`consulta`='$consulta',`data`='$data',`senha`='$senha' WHERE `id`='$id'";
						$result = $mysqli->query( $sql );
						echo "Usuário Alterado com Sucesso!!!";
						
					}
				
				
			?>
		<p><a href="paginicial.php">Voltar para Pagina Inicial</a></p>
	</body>
</html>