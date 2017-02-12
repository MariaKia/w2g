<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');
	include('conecta.php');
	include('class/Usuario.php');
	include('class/UsuarioDao.php');
	include('class/Grupo.php');
	include('class/GrupoDao.php');

	verificaLogado();
	$gDao = new GrupoDao($conexao);
	$grupo=$gDao->carregaGrupo($_GET['id']);

?>
	
		<section class="espaco">
			<div class="container">
				<br><br><br>
				<?php 
					if (usuarioLogadoId() == $grupo->getDono()){
						echo "<a href='actions/deletaGrupo.php?id={$grupo->getId()}'>Deletar Grupo</a><br>";
						echo "<a href='atualizarGrupo.php?id={$grupo->getId()}'>Atualizar Grupo</a>";
					}
				 ?>
				
				<div class="foto-postagem">
					<?php 
						echo "<img class='foto-usuario' src='{$grupo->getImagem()}' height='50px' width='auto'>"; 
					?>
				</div>

				<label><?php echo $grupo->getNome(); ?></label>
				<p><?php echo $grupo->getDescricao(); ?></p><br>
				
				<label> Adicionar Postagem: </label>
				<textarea class="form-control" id="escreve-post" onInput='limitaCharPost(this.id)'></textarea>
				<br>
				<label>Vídeo: </label>
				<input type="text" class="form-control" id="escreve-video">
				<br>
				<div class="btn-group" role="group" aria-label="">
					<button type="button" class="btn btn-default">Postar</button>
				</div>

				<h1>Postagens</h1>

				<?php 
					$postagens = $gDao->pesquisaPostagens($grupo->getId());
						foreach ($postagens as $post) {	
				 ?>
					<section class="post"> 
						
						<div class="barra">
							<span class='usuario-e-foto'>
								<?php 
									echo "<img class='foto-perfil-post' src='{$post->getUsuario()->getImagem()}'>"; 
									echo "<h2 class='nome-perfil-post'>  {$post->getUsuario->getNome()} </h2>";
								?>
								
							</span>
								<p class="texto-usuario">{$post->getPostagem()}</p>
							<span class='video-post'>
								<iframe width="560" height="315" src="https://www.youtube.com/embed/sMb00lz-IfE" frameborder="0" allowfullscreen></iframe>
							</span>
						</div>
							<?php 
								$pDao = new PostagemDao($conexao);
								$respostas = $pDao->pesquisaRespostas($post->getIdPostagem());
								foreach ($respostas as $resposta) {
							?>
								<div class='respostas'>
									<span class='usuario-e-foto'>
										<img class='foto-perfil-resposta' src="img/wtg.png">
										<h6 class='nome-perfil-resposta'> Rafael da Silva:  </h6>
										<p class="texto-usuario-resposta"> Nem é tão bom assim.</p>
									</span>
								</div>
							<?php } ?>

						<div class='usuario-comenta'>
							<textarea class='text-comentario' name="comentar" placeholder='Digite seu comentário'></textarea>
						</div>

					</section>
				<?php } ?>




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
<?php 
	include('footer.php');
 ?>

