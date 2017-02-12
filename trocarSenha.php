<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');
	verificaLogado();
?>

		<section class="espaco">
			<div class="container">
			<br><br><br>
				<label>Senha Atual: </label>
				<input class="form-control" id="senha-usuario" type="text">

				<label>Nova Senha: </label>
				<input class="form-control" id="senha-usuario" type="text">

				<label>Confirmar Nova Senha: </label>
				<input class="form-control" id="senha-usuario" type="text">
                <br>
				
				<div class="btn-group" role="group" aria-label="...">
					<a href="perfil.php"><button type="button" class="btn btn-default">Atualizar</button></a>
				</div>	
			</div>
		</section>

<?php 
	include('footer.php');
 ?>