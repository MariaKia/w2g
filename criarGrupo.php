<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');
	include('navegador.php');
	verificaLogado();
?>
		<section class="criar-grupo espaco">
			<div class="container">
				<br><br><br>
				<div>
					<img class="foto-usuario" src="">
				</div>
				<label >Nome do Grupo: </label>
				<input type="text" class="form-control" id="nome-grupo" required data-validation-required-message="Por favor descreva sua senha !"><br>
				<label >Descrição: </label>
				<textarea  class="form-control" id="desc-grupo" required data-validation-required-message="Por favor descreva sua senha !"></textarea><br>
				<!--
				<label >Participantes do Grupo: </label>
				<select size="1" name="D1">
					<option selected value="Selecione">Selecione!</option>
					<option value="2000"></option>
					<option value="2001"></option>
				</select><br>

				<label >Participantes do Grupo: </label>
				<input type="text" class="form-control" id="nome" required data-validation-required-message="Por favor descreva sua senha !"><br>
				-->
				<div class="btn-group" role="group" aria-label="...">
					<button type="button" class="btn btn-default">Criar</button>
					<button type="button" class="btn btn-default">Cancelar</button>
				</div>
			</div>
		</section>
<?php 
	include('footer.php');
 ?>

