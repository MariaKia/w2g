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
		<input type="text" class="form-control" id="nome" required data-validation-required-message="Pesquisar Grupo/Usuário"><br>
		
		<div class="btn-group" role="group" aria-label="">
			<button type="button" class="btn btn-default">Pesquisar</button>
		</div>
		<br><br>

		<div class="grupo-pesquisa">
			<span id="">
				<a href=''>
					<div class="col-xs-6 col-md-3">
			    		<img src="img/img1.png" class="pequeno" alt="">
			    	</div>
					<h4>Usuário: Rafael Pereira</h4>
				</a>
			</span>
			
		</div>
		<div class="grupo-pesquisa">
			<a href=''>
			<span id="">
				<div class="col-xs-6 col-md-3">
		    		<img src="img/img2.png" class="pequeno" alt="">
		    	</div>
				<h4>Grupo: Tecnico de Informático para leigos</h4>
			</span>
			</a>
		</div>
		<div class="grupo-pesquisa">
			<a href=''>
			<span id="">
				<div class="col-xs-6 col-md-3">
		    		<img src="img/img3.png" class="pequeno" alt="">
		    	</div>
				<h4>Usuário: Lucas fernandes</h4>
			</span>
			</a>
		</div>
	</div>
</section>
<?php 
	include('footer.php');
 ?>

