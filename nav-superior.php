		<header>
			<div class="page-header navbar-fixed-top meio">
				<div class="left">
					<img class="img-responsive meio" src="img/wtg.png" alt="">

					<a href="perfil.php"><span class="separa meio">
							<?php echo usuarioNome(); ?></span></a>
					<a href=""><span class="separa meio"><?php echo usuarioCurso(); ?></span></a>
				</div>

				<div class="navbar-right pesquisa flutua">
				<a href="homepage.php"><h5>Way to Grow</h5></a>
					<input type="submit" id='btn-pesquisa' class="btn btn-default flutua" value="Pesquisar"/>						
					<input type="text" id='box-pesquisa' class="form-control flutua" placeholder="Pesquise grupos e amigos"> 
					<a href=desloga.php>Sair</a>
				</div>
			</div>
		</header>