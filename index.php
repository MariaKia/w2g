<?php
	include('header.php');
	include('logica-usuario.php');
	verificaLogadoIndex();
	include('headerIndex.php');
?>

<!-- Corpo do Site -->
<section>
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

				<label><input type="radio" name='sexo' id="sexo-feminino" checked=''> Feminino</label>
				<label><input type="radio" name='sexo' id="sexo-masculino"> Masculino</label>

				<br> <br>

				<label for="unidade-senai-usuario">Unidade SENAI: </label><br>
					<div class="post">
						<label><input type="radio" name="unidade" value="Conecta"> Conecta</label> <br>
						<label><input type="radio" name="unidade" value="Goiana"> Goiana</label> <br>
						<label><input type="radio" name="unidade" value="Jaboatão"> Jaboatão</label> <br>	
						<label><input type="radio" name="unidade" value="aguafria"> Água Fria</label> <br>	
						<label><input type="radio" name="unidade" value="Araripina"> Araripina</label> <br>	
						<label><input type="radio" name="unidade" value="Areias"> Areias</label> <br>	
						<label><input type="radio" name="unidade" value="Cabo"> Cabo</label> <br>	
						<label><input type="radio" name="unidade" value="Caruaru"> Caruaru</label> <br>	
						<label><input type="radio" name="unidade" value="Garanhuns"> Garanhuns</label> <br>	
						<label><input type="radio" name="unidade" value="Paulista"> Paulista</label> <br>
						<label><input type="radio" name="unidade" value="Petrolina"> Petrolina</label> <br>
						<label><input type="radio" name="unidade" value="Santa"> Santa Cruz </label><br>
						<label><input type="radio" name="unidade" value="Santo"> Santo Amaro </label><br>
						<label><input type="radio" name="unidade" value="Faculdade"> Faculdade de Tecnologia SENAI Pernambuco</label> <br>
					</div><br><br>


				<label for="curso-usuario">Curso: </label><br>
					<div class="post">
						<label><input selected type="radio" name="curso"> Alimentos e Bebidas</label><br>
						<label><input type="radio" name="curso" > Automação e Mecatrônica </label><br>
						<label><input type="radio" name="curso" > Automotiva </label><br>
						<label><input type="radio" name="curso" > Construção Civil </label><br>
						<label><input type="radio" name="curso" > Construção Naval </label><br>
						<label><input type="radio" name="curso" > Eletroeletrônica </label><br>
						<label><input type="radio" name="curso" > Energia GTD - Geração, Transmissão e Distribuição </label><br>
						<label><input type="radio" name="curso" > Energia Sucroalcooleira </label><br>
						<label><input type="radio" name="curso" > Gestão </label><br>
						<label><input type="radio" name="curso" > Logística </label><br>
						<label><input type="radio" name="curso" > Madeira e Mobiliário </label><br>
						<label><input type="radio" name="curso" > Meio Ambiente </label><br>
						<label><input type="radio" name="curso" > Metalmecânica </label><br>
						<label><input type="radio" name="curso" > Metrologia </label><br>
						<label><input type="radio" name="curso" > Minerais não Metálicos </label><br>
						<label><input type="radio" name="curso" > Polímeros</label> <br>
						<label><input type="radio" name="curso" > Práticas Profissionais Supervisionadas </label><br>
						<label><input type="radio" name="curso" > Química </label><br>
						<label><input type="radio" name="curso" > Refrigeração e Climatização</label> <br>
						<label><input type="radio" name="curso" > Segurança do Trabalho</label> <br>
						<label><input type="radio" name="curso" > Tecnologia da Informação </label><br>
						<label><input type="radio" name="curso" > Telecomunicações</label><br>
						<label><input type="radio" name="curso" > Têxtil </label><br>
						<label><input type="radio" name="curso" > Transportes </label><br>
						<label><input type="radio" name="curso" > Vestuário </label><br>
					</div><br><br>

				<input type="password"name="senha-cria"class="form-control small mein" placeholder="Senha" id="cadastro-senha" required data-validation-required-message="Por favor descreva sua senha !"><br>

				<input type="password" class="form-control small mein" placeholder="Confirmar Senha" id="cadastro-confirma-senha" required data-validation-required-message="Por favor descreva sua senha !"><br>

				<p><input type="radio" id="termos"> Ou aceita esse <a href="">trem</a> ou vai embooooora u,u</p>
				<br>
			
				<div class="btn-group" role="group">
					<a href="homepage.php"></a> <button type="button" class="btn btn-default" onClick="validaCadastro();">Cadastrar</button>
				</div>

				<div class="btn-group" role="group">
					<a data-toggle="collapse" data-target=".criar" ><button type="button" class="btn btn-default">Já tenho uma conta!</button> </a>
				</div><br><br>
			</form>
		</div>
	</div>
</section>

<?php 
	include('footer.php');
?>
