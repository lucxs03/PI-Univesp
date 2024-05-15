<?php
session_start();
include('verifica_login.php');
$_SESSION['email'];

echo ("<!DOCTYPE html>");
echo("<html lang='pt-br'>");
	echo("<head>");
	echo("<meta charset='utf-8'/>");
	echo("<link rel='stylesheet' href='css/pagninicial.css'>");
	echo("<title>Perfil</title>");
	echo("</head>");
	echo("<body>");
	echo("<section class='area-inicio'>");
	echo("<div class='inicio'>");
	echo("<p>Dados</p>");

	$mysqli = new mysqli('localhost', 'root', '', 'agendamento');
				
				$sql = "select * from tab_cadastro where email= '". $_SESSION['email']."'";
				
				$view = $mysqli->query ( $sql );
				
                $linha = $view-> fetch_assoc();
					echo ("<form method='POST' action='alterar.php' enctype='multipart/form-data'>");
					echo ("<input type='hidden' name= 'id' value='".$linha["id"]."' />");
					echo ("	<label>Nome:<input type='text' name='nome' value='".$linha["nome"]."'/></label><br/>");
					echo ("	<label>E-Mail:<input type='text' name='email' value='".$linha["email"]."'/></label><br/>");
					echo ("	<label>Telefone:<input type='text' name='telefone' value='".$linha["telefone"]."'/></label><br/>");
					echo ("	<label>Rua:<input type='text' name='rua' value='".$linha["rua"]."'/></label><br/>");
					echo ("	<label>Número:<input type='text' name='numero' value='".$linha["numero"]."'/></label><br/>");
					echo ("	<label>Bairro:<input type='text' name='bairro' value='".$linha["bairro"]."'/></label><br/>");
					echo ("	<label>Cidade:<input type='text' name='cidade' value='".$linha["cidade"]."'/></label><br/>");
					echo ("	<label>CPF:<input type='text' name='cpf' value='".$linha["cpf"]."'/></label><br/>");
					echo ("	<label>Especialidade médica:<input type='text' name='consulta' value='".$linha["consulta"]."'/></label><br/>");
					echo ("	<label>Data de Consulta:<input type='date' name='data' value='".$linha["data"]."'/></label><br/>");
					echo ("	<label>Senha:<input type='text' name='senha' value='".$linha["senha"]."'/></label><br/>");
					echo ("	<input type='submit' value='Alterar' />");
					echo ("</form>");
					echo (" <form method='POST' action='excluir.php'>
        					<input type='hidden' name='id' value=".$linha["id"]." /><br/>
        					<input type='submit' value='Excluir' />
        					</form>");
				

	   echo("<h2><a href='logout.php'>SAIR</a></h2>");
	 echo("</div>");
	echo("</section>");
  echo ("</body>");
echo("</html>");

?>