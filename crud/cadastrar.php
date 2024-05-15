<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="css/cadastros.css">
		<title>Cadastro</title>
	</head>
	<body>
	<section class="area-cadastro">
	<div class="cadastro">
		<p>AGENDAMENTO - CADASTRO</p>
		<form method="POST" action="Up_cadastrar.php" enctype="multipart/form-data">
			<input type="text" name="nome" placeholder="Nome Completo" autofocus>
			<input type="text" name="email" placeholder="Digite um e-mail" autofocus>
			<input type="text" name="telefone" placeholder="Digite um telefone" autofocus>
			<input type="text" name="rua" placeholder="Informe a rua" autofocus>
			<input type="text" name="numero" placeholder="Informe o número" autofocus>
			<input type="text" name="bairro" placeholder="Informe o bairro" autofocus>
			<input type="text" name="cidade" placeholder="Informe a cidade" autofocus>
		    <input type="text" name="cpf" placeholder="Informe o CPF" autofocus>
			<br>
			<label for="consulta"><b>Escolha a especialidade médica:</b></label>
	        <select id="consulta" name="consulta" required="required">
		            <option value="Pediatria">Pediatria</option>
		            <option value="Psiquiatria">Psiquiatria</option>
		            <option value="Clinico Geral">Clínico Geral</option>
					<option value="Cardiologia">Cardiologia</option>
			</select>
			<br>
			<label for="data"><b>Escolha a data de sua consulta:</b></label>
			<input type="date" name="data" autofocus>
			<input type="password" name="senha" placeholder="Crie uma senha">
			<input type="submit" value="Cadastrar">
		</form>
		<p>Deseja voltar para a pagina inicial?<a href="../index.php">Pagina Inicial</a></p>
		<text>Já tem uma conta?<a href="login.php">Fazer Login</a></text>
	</div>
	</section>
 </body>
</html>