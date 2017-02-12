<?php
	include('header.php');
	include('logica-usuario.php');
	verificaLogadoIndex();
	include('headerIndex.php');
?>

<!-- Corpo do Site -->
<section class="index">
	<div class="container">
		<div class="row">
			<form class="criar collapse in" action='login.php' method='post'>
				<h2 class="center"> Login </h2>
				<input type="email" class="form-control small mein" placeholder="Email" id="login" name="email" required data-validation-required-message="Por favor descreva o seu Email !"><br>
				<input type="password" class="form-control small mein" placeholder="Senha" id="senha" name="senha" required data-validation-required-message="Por favor descreva sua senha !"><br>
				<label><input type="checkbox" > Se lembre de mim!</label><br/>
				<a class="rigth" href="">Esqueceu a senha ?</a>
				<br><br>
				<div class="btn-group" role="group">
				<button type="submit" class="btn btn-default" onClick="validaLogin();">Entrar</button>

				</div>
				<div class="btn-group" role="group">
					<a data-toggle="collapse" data-target=".criar" ><button type="button" class="btn btn-default">Criar nova Conta</button> </a>
				</div>
			</form>

			<form id="criar" class="collapse criar" action="criar-conta.php" method='post'>
				<h1 class="center"> Cadastro </h1>
				<input type="text" name="nome-cria" class="form-control small mein" placeholder="Nome" id="cadastro-nome" required data-validation-required-message="Por favor descreva o nome de usuário !"><br>

				<input type="text"name="sobrenome-cria" class="form-control small mein" placeholder="Sobrenome" id="cadastro-sobrenome" required data-validation-required-message="Por favor descreva sua senha !"><br>

				<input type="text"name="email-cria" class="form-control small mein" placeholder="Email" id="cadastro-email" required data-validation-required-message="Por favor descreva sua senha !"><br>

				<label><input type="radio" name='sexo' value="Feminino"id="sexo-feminino" checked=''> Feminino</label>
				<label><input type="radio" name='sexo' value="Masculino"id="sexo-masculino"> Masculino</label>

				<br> <br>

				<label for="unidade-senai-usuario">Unidade SENAI: </label><br>
					<div class="post">	
						<label><input type="radio" name="unidade" value="Areias"> Areias</label> <br>	
						<label><input type="radio" name="unidade" value="Faculdade de Tecnologia SENAI Pernambuco"> Faculdade de Tecnologia SENAI Pernambuco</label> <br>
					</div><br><br>


				<label for="curso-usuario">Curso: </label><br>
					<div class="post">
						<label><input checked type="radio" name="curso" value="Administração"> Administração</label><br>
						<label><input type="radio" name="curso" value="Análise e Desenvolvimento de Sistemas"> Análise e Desenvolvimento de Sistemas </label><br>
						<label><input type="radio" name="curso"	value="Automação Industrial" > Automação Industrial </label><br>
						<label><input type="radio" name="curso" value="Informática"> Informática </label><br>
						<label><input type="radio" name="curso" value="Redes de Computadores"> Redes de Computadores Naval </label><br>
						<label><input type="radio" name="curso" value="Telecomunicações"> Telecomunicações </label><br>
						<label><input type="radio" name="curso" value="Eletrônica"> Eletrônica</label><br>
					</div><br><br>

				<input type="password"name="senha-cria"class="form-control small mein" placeholder="Senha" id="cadastro-senha" required data-validation-required-message="Por favor descreva sua senha !"><br>

				<input type="password" class="form-control small mein" placeholder="Confirmar Senha" id="cadastro-confirma-senha" required data-validation-required-message="Por favor descreva sua senha !"><br>

				<p><input type="radio" id="termos"> <a href="">Aceite os nossos termos.</a></p>
				<br>
			
				<div class="btn-group" role="group">
					<button type="submit" class="btn btn-default" onClick="validaCadastro();">Cadastrar</button>
				</div>

				<div class="btn-group" role="group">
					<a data-toggle="collapse" data-target=".criar" ><button type="button" class="btn btn-default">Já tenho uma conta!</button> </a>
				</div><br><br>
			</form>
			<br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
</section>

<?php 
	include('footer.php');
?>
