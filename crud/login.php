<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/login.css">
		<title>Login</title>
</head>
<body>
	<section class="area-login">
	
	<div class="login">
	<p>LOGIN</p>
	<?php
		if(isset($_SESSION['nao_autenticado'])):
	?>
	<div class="notificacao">
	<p>ERRO: Usuário ou senha inválidos.</p>
	</div>
	<?php
	endif;
	unset($_SESSION['nao_autenticado']);
	?>
		<form action="Up_login.php" method="POST">
			<input type="text" name="email" placeholder="E-mail de usuário" autofocus> 
			<input type="password" name="senha" placeholder="Sua senha">
			<input type="submit" value="Entrar">	
		</form>
		<p> Ainda não fez seu agendamento?<a href="cadastrar.php">Agende sua consulta</a></p>
		<text>Deseja voltar para a pagina inicial?<a href="../index.php">Pagina Inicial</a></text>
	</div>
	</section>
</body>
</html>