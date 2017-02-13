<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');
	verificaLogado();
?>

<section class="espaco">
	<div class="container">
		<br><br><br>
		<section class="post"> 
			<div class="barra">
				<span class='usuario-e-foto'>
					<img class='foto-perfil-post' src="img/avatar.png">
					<h2 class='nome-perfil-post'>  Marcela Rodriguez </h2>
					
				</span>
				<span class="data-postagem">22 de dezembro de 2016</span>
				<p class="texto-usuario">Eu achei esse vídeo legal.</p>
				<span class='video-post'>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/sMb00lz-IfE" frameborder="0" allowfullscreen></iframe>
				</span>
			</div>

			<div class='respostas linha-separa'>
				<span class='usuario-e-foto comentario'>
					<img class='foto-perfil-resposta' src="img/avatar.png">
					<h6 class='nome-perfil-resposta'> Rafael da Silva:  </h6>
					<p class="texto-usuario-resposta"> Nem é tão bom assim.</p>
				</span>
			</div>
				
			<div class='usuario-comenta'>
				<div class="linha-separa-comentario"></div>
				<br>
				<textarea class='text-comentario' name="comentar" placeholder='Digite seu comentário'></textarea>
			</div>

		</section>
		<!--repete +2 -->
		<section class="post"> 
			<div class="barra">
				<span class='usuario-e-foto'>
					<img class='foto-perfil-post' src="img/avatar.png">
					<h2 class='nome-perfil-post'>  Marcela Rodriguez </h2>
				</span>
				<span class="data-postagem">22 de dezembro de 2016</span>
				<p class="texto-usuario">Eu achei esse vídeo legal.</p>
				<span class='video-post'>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/sMb00lz-IfE" frameborder="0" allowfullscreen></iframe>
				</span>
			</div>
			<div class='respostas'>
				<span class='usuario-e-foto comentario'>
					<img class='foto-perfil-resposta' src="img/avatar.png">
					<h6 class='nome-perfil-resposta'> Rafael da Silva:  </h6>
					<p class="texto-usuario-resposta"> Nem é tão bom assim.</p>
				</span>
			</div>

			<div class='usuario-comenta'>
				<div class="linha-separa-comentario"></div>
				<br>
				<textarea class='text-comentario' name="comentar" placeholder='Digite seu comentário'></textarea>
			</div>

		</section>
		
		<section class="post"> 
			<div class="barra">
				<span class='usuario-e-foto'>
					<img class='foto-perfil-post' src="img/avatar.png">
					<h2 class='nome-perfil-post'>  Marcela Rodriguez </h2>
				
				</span>
					<span class="data-postagem">22 de dezembro de 2016</span>
				<p class="texto-usuario">Eu achei esse vídeo legal.</p>
				<span class='video-post'>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/sMb00lz-IfE" frameborder="0" allowfullscreen></iframe>
				</span>
			</div>
			<div class='respostas'>
				<span class='usuario-e-foto comentario'>
					<img class='foto-perfil-resposta' src="img/avatar.png">
					<h6 class='nome-perfil-resposta'> Rafael da Silva:  </h6>
					<p class="texto-usuario-resposta"> Nem é tão bom assim.</p>
				</span>
			</div>

			<div class='usuario-comenta'>
				<div class="linha-separa-comentario"></div>
				<br>
				<textarea class='text-comentario' name="comentar" placeholder='Digite seu comentário'></textarea>
			</div>
		</section>
	</div>
</section>

<?php 
	include('footer.php');
?>