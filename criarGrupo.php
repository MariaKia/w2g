<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');
	verificaLogado();
?>
		<section class="criar-grupo espaco">
			<div class="container">
				<br><br><br>
				<div>
					<img class="foto-usuario" src="">
				</div>
					<form class='perfil' method="post" action="actions/CriarGrupo.php">
						<label >Nome do Grupo: </label>
						<input type="text" class="form-control" name="grupoNome" id="nome-grupo" required data-validation-required-message="Por favor descreva o nome do grupo!"><br>
						<label >Descrição: </label>
						<textarea  class="form-control"  name="descGrupo"id="desc-grupo" required data-validation-required-message="Por favor descreva sua senha !"></textarea><br>
						<div class="btn-group" role="group" aria-label="...">
							<button type="Submit" class="btn btn-default">Criar</button>
						</div>	
					</form>	


			</div>
		</section>
<?php 
	include('footer.php');
 ?>

