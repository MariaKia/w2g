<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');
	include('navegador.php');
	verificaLogado();
?>

<section>
	<div class="container">
	<br><br><br>
		<div class="foto-postagem">
			<img class="foto-usuario" src="img/wtg.png">
		</div>

		<label>Texto: </label>
		<textarea class="form-control" id="nome" required data-validation-required-message="Por favor descreva sua senha !"></textarea><br>

		<div class="btn-group" role="group" aria-label="">
			<a href="paginaGrupo.html"><button type="button" class="btn btn-default">Atualizar</button></a>
		</div>
	</div>
</section>

<?php 
	include('footer.php');
 ?>

