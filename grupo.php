<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');
	include('navegador.php');
	verificaLogado();
?>
		<section class="espaco">
			<div class="container">
				<br><br><br>
				<a href="atualizarGrupo.php">Atualizar Grupo</a><br>
				<a href="">Deletar Grupo</a>
				
				<div class="foto-postagem">
					<img class="foto-usuario" src="img/wtg.png">
				</div>

				<label>Coisas Físicas: </label>
				<p>Grupo voltado para discussão relativa a coisas da física. Nada de teorema de pítagoras por aqui!</p><br>
				
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

		<section class="post"> 
			<div class="foto-postagem">
				<img class="foto-usuario" src="">
			</div>
			<div class="barra">
				<span class='usuario-e-foto'>
					<img class='foto-perfil-post' src="img/wtg.png">
					<h2 class='nome-perfil-post'>  Marcela Rodriguez </h2>
				</span>
				<p class="texto-usuario">Eu achei esse vídeo legal.</p>
				<span class='video-post'>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/sMb00lz-IfE" frameborder="0" allowfullscreen></iframe>
				</span>
			</div>
			<div class='respostas'>
				<span class='usuario-e-foto'>
					<img class='foto-perfil-resposta' src="img/wtg.png">
					<h6 class='nome-perfil-resposta'> Rafael da Silva:  </h6>
					<p class="texto-usuario-resposta"> Nem é tão bom assim.</p>
				</span>
			</div>

			<div class='usuario-comenta'>
				<textarea class='text-comentario' name="comentar" placeholder='Digite seu comentário'></textarea>
			</div>

		</section>
		<!--repete +2 -->
		<section class="post"> 
			<div class="foto-postagem">
				<img class="foto-usuario" src="">
			</div>
			<div class="barra">
				<span class='usuario-e-foto'>
					<img class='foto-perfil-post' src="img/wtg.png">
					<h2 class='nome-perfil-post'>  Marcela Rodriguez </h2>
				</span>
				<p class="texto-usuario">Eu achei esse vídeo legal.</p>
				<span class='video-post'>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/sMb00lz-IfE" frameborder="0" allowfullscreen></iframe>
				</span>
			</div>
			<div class='respostas'>
				<span class='usuario-e-foto'>
					<img class='foto-perfil-resposta' src="img/wtg.png">
					<h6 class='nome-perfil-resposta'> Rafael da Silva:  </h6>
					<p class="texto-usuario-resposta"> Nem é tão bom assim.</p>
				</span>
			</div>

			<div class='usuario-comenta'>
				<textarea class='text-comentario' name="comentar" placeholder='Digite seu comentário'></textarea>
			</div>

		</section>
		
		<section class="post"> 
			<div class="foto-postagem">
				<img class="foto-usuario" src="">
			</div>
			<div class="barra">
				<span class='usuario-e-foto'>
					<img class='foto-perfil-post' src="img/wtg.png">
					<h2 class='nome-perfil-post'>  Marcela Rodriguez </h2>
				</span>
				<p class="texto-usuario">Eu achei esse vídeo legal.</p>
				<span class='video-post'>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/sMb00lz-IfE" frameborder="0" allowfullscreen></iframe>
				</span>
			</div>
			<div class='respostas'>
				<span class='usuario-e-foto'>
					<img class='foto-perfil-resposta' src="img/wtg.png">
					<h6 class='nome-perfil-resposta'> Rafael da Silva:  </h6>
					<p class="texto-usuario-resposta"> Nem é tão bom assim.</p>
				</span>
			</div>

			<div class='usuario-comenta'>
				<textarea class='text-comentario' name="comentar" placeholder='Digite seu comentário'></textarea>
			</div>

		</section>



<?php 
	include('footer.php');
 ?>

