<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');
	verificaLogado();
?>
<section class="espaco">
	<div class="container">
	<br><br><br>
	
	<form action='actions/busca.php' method='POST'>
		<input type="text" class="form-control" id="pesquisa" name='pesquisa' required data-validation-required-message="Pesquisar Grupo/Usuário"><br>
		
		<div class="btn-group" role="group" aria-label="">
			<button type="submit" class="btn btn-default">Pesquisar</button>
		</div>
	</form>

		<br><br>

			<?php 
				$pesquisa = usuarioPesquisaGrupo();
				if ($pesquisa!='-1'){
					$gDao = new GrupoDao($conexao);
					$grupos = $gDao->buscaGrupos($pesquisa);
					foreach ($grupos as $grupo) {				 
			?>
			
				<div class="grupo-pesquisa">
					<span id="">
						
							<?php echo "<a href='grupo.php?id={$grupo->getId()}'>"; ?>
							<div class="col-xs-6 col-md-3">
					    		<img src="img/img1.png" class="pequeno" alt="">
					    	</div>
							<h4> Grupo: <?php echo $grupo->getNome(); ?></h4>
						</a>
					</span>
				</div>

			<?php 
					}
				}
			?>



</section>
<?php 
	include('footer.php');
 ?>

