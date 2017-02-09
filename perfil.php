<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');
	include('navegador.php');
	verificaLogado();
?>
		<!-- Corpo -->
		<section class="login espaco">
			<div class="container">
			<br><br><br>
				<div class="perfil row">
					<div class='col-xs-6 col-md-3'>
						<span class='usuario-e-foto thumbnail'>
							<img class='foto-perfil' src="img/img4.png">
							<h6 class='nome-perfil'> Rafael da Silva  </h6>
						</span>
					</div>
					<div>
						<p> <label >Email: </label> exemplo@senai.pe.com.br</p>
						

						<p>	<label >Sexo: </label>  Macho </p>


						<p> <label >Curso: </label> Técnico em informática</p>
						
						<a href="atualizarPerfil.php">Atualizar Perfil</a><br>
						<a href="trocarSenha.php">Trocar senha</a><br>
					</div>
				</div>

				<h1> Amigos </h1><br>

				<div class="col-xs-6 col-md-3 img">
				    <a href="perfil.php" class="thumbnail">
				      <img class="foto-grupo" src="img/img1.png" >
				      <div class="caption">
				        <h3> Rafael Siqueira </h3> 
				      </div>
				    </a>
				</div>
				<div class="col-xs-6 col-md-3 img">
				    <a href="perfil.php" class="thumbnail">
				      <img class="foto-grupo" src="img/img2.png" >
				      <div class="caption">
				        <h3> Júlia Tata </h3>
				      </div>
				    </a>
				</div>
				<div class="col-xs-6 col-md-3 img">
				    <a href="perfil.php" class="thumbnail">
				      <img class="foto-grupo" src="img/img3.png" >
				      <div class="caption">
				        <h3>Rodrigo Fernandez</h3>
				      </div>
				    </a>
				</div>
				<div class="col-xs-6 col-md-3 img">
				    <a href="perfil.php" class="thumbnail">
				      <img class="foto-grupo" src="img/img4.png" >
				      <div class="caption">
				        <h3> Andrey Sokolov </h3>
				      </div>
				    </a>
				</div>
				<div class="col-xs-6 col-md-3 img">
				    <a href="perfil.php" class="thumbnail">
				      <img class="foto-grupo" src="img/img5.png">
				      <div class="caption">
				        <h3> Camila Barbosa </h3>
				      </div>
				    </a>
				</div>
				<div class="col-xs-6 col-md-3 img">
				    <a href="perfil.php" class="thumbnail">
				      <img class="foto-grupo" src="img/img6.png" >
				      <div class="caption">
				        <h3> Larissa Gavião </h3>
				      </div>
				    </a>
				</div>
			</div>
		</section>

<?php 
	include('footer.php');
 ?>