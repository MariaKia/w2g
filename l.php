<?php
	include('header.php');
	include('nav-superior.php');
	include('navegador.php');
?>

		<section class="espaco">
			<div class="container">
				
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
					<option value="Goiana">Goiana</option>
					<option value="Jaboatao">Jaboatão dos Guararapes</option>
                    <option value="agua-fria">Água Fria</option>
                    <option value="araripina">Araripina</option>
                    <option value="cabo">Cabo</option>
                    <option value="caruaru">Caruaru</option>
                    <option value="garanhus">Garanhus</option>
                    <option value="paulista">Paulista</option>
                    <option value="petrolina">Petrolina</option>
                    <option value="santa-cruz">Santa Cruz</option>
                    <option value="santo-amaro">Santo Amaro</option>
                    <option value="paulista">Paulista</option>
                    <option selected="selected" value="Selecione">Selecione!</option>
				</select><br><br>
				
				<label >Curso: </label>
				<select size="1" name="cursus">
					<option selected value="Selecione">Selecione!</option>
					<option value=""></option>
					<option value=""></option>
				</select><br><br>
				
				<div class="btn-group" role="group" aria-label="...">
					<a href="perfil.php"><button type="button" class="btn btn-default">Atualizar</button></a>
				</div>	
			</div>
		</section>


<?php 
	include('footer.php');
 ?>