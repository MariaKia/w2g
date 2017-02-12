<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');
	verificaLogado();
?>
		<!-- Corpo -->
		<section class="login espaco">
			<div class="container">
			<br><br><br>
				<blockquote class="perfil">
					<div class='col-xs-6 col-md-3'>
						<span class='usuario-e-foto thumbnail'>
							<img class='img-circle' src="img/img5.jpg">
							<h5 class='nome-perfil'> Rafael da Silva  </h5>
						</span>
					</div>
					<div>
						<h5> <label>Email: </label> exemplo@senai.pe.com.br</h5>			

						<h5> <label>Sexo: </label>  Masculino </h5>

						<h5> <label>Curso: </label> Técnico em informática</h5>
					
						<div class="btn-group btn-group-justified grande" role="group">
							<div class="btn-group" role="group">
								<a href="atualizarPerfil.php"><button type="button" class="btn btn-default">Atualizar Perfil
								</button></a><br>
							</div>
							<div class="btn-group" role="group">
								<a href="trocarSenha.php"><button type="button" class="btn btn-default">Trocar senha</button></a>
							</div>
						</div>
					</div>
				</blockquote>

				<div class="container">
					<h1> Amigos </h1><br>
					<div class="col-xs-6 col-md-4 caixa-amigos">
					    <a href="perfil.php" class="thumbnail img">
					      <img class="img-circle" src="img/img3.jpg" >
					      <div class="caption">
					        <h3> Rafael Siqueira </h3> 
					      </div>
					    </a>
					</div>

					<div class="col-xs-6 col-md-4 caixa-amigos">
					    <a href="perfil.php" class="thumbnail img">
					      <img class="img-circle" src="img/img4.jpg" >
					      <div class="caption">
					        <h3> Júlia Tata </h3>
					      </div>
					    </a>
					</div>

					<div class="col-xs-6 col-md-4 caixa-amigos">
					    <a href="perfil.php" class="thumbnail img">
					      <img class="img-circle" src="img/img3.jpg" >
					      <div class="caption">
					        <h3>Rodrigo Fernandez</h3>
					      </div>
					    </a>
					</div>

					<div class="col-xs-6 col-md-4 caixa-amigos">
					    <a href="perfil.php" class="thumbnail img">
					      <img class="img-circle" src="img/img4.jpg" >
					      <div class="caption">
					        <h3> Andrey Sokolov </h3>
					      </div>
					    </a>
					</div>

					<div class="col-xs-6 col-md-4 caixa-amigos">
					    <a href="perfil.php" class="thumbnail img">
					      <img class="img-circle" src="img/img3.jpg">
					      <div class="caption">
					        <h3> Camila Barbosa </h3>
					      </div>
					    </a>
					</div>

					<div class="col-xs-6 col-md-4 caixa-amigos">
					    <a href="perfil.php" class="thumbnail img">
					      <img class="img-circle" src="img/img4.jpg">
					      <div class="caption">
					        <h3> Larissa Gavião </h3>
					      </div>
					    </a>
					</div>
				</div>
			</div>
		</section>

<?php 
	include('footer.php');
 ?>