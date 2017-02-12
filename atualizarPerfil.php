<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');
	verificaLogado();
?>

		<section class="espaco">
			<div class="container">
				<br><br><br>
				
				<form class="atualizar-perfil">
					<img class="foto-usuario" src="img/wtg.png"><br>
					<label >Nome: </label>
				<input type="text" class="form-control" id="nome-usuario">
				<br>
		
				<label >Email: </label>
				<input type="email" class="form-control" id="email-usuario">
				<br>

				<label>Senha Atual: </label>
				<input class="form-control" id="senha-usuario" type="text"><br>
				
				<label >Sexo: </label>
				<input type="radio" id="termos"> Feminino
				<input type="radio" id="termos"> Masculino<br><br>

				<label>Unidade: </label>
				<select size="1" name="grupos">
					<option value="Areias">Areias</option>
					<option value="Faculdade de Tecnologia SENAI Pernambuco">Faculdade de Tecnologia SENAI Pernambuco</option>
				</select><br><br>
				
				<label >Curso: </label>
				<select size="1" name="cursus">
					<option value="Administração">Administração</option>
					<option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
					<option value="Automação Industrial">Automação Industrial</option>
					<option value="Informática">Informática</option>
					<option value="Redes de Computadores">Redes de Computadores</option>
					<option value="Telecomunicações">Telecomunicações</option>
					<option value="Eletrônica">Eletrônica</option>
				</select><br><br>
				
				<div class="btn-group" role="group" aria-label="...">
					<a href="perfil.php"><button type="button" class="btn btn-default">Atualizar</button></a>
				
				</form>
				</div>	
			</div>
		</section>


<?php 
	include('footer.php');
 ?>