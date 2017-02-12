<?php
	include('header.php');
	include('logica-usuario.php');
	include('nav-superior.php');;
	verificaLogado();
?>

<section class="espaco">
	<div class="container">
		<div class="row">
		<br><br><br>
			<h1> Grupos </h1><br>

			<div class="col-xs-6 col-md-3 caixa">
			    <a href="grupo.php" class="thumbnail img">
			      <img class="foto-grupo" src="img/img14.jpg" alt="">
			      <div class="caption">
			        <h3> Game Players </h3> 
			      </div>
			    </a>
			</div>
			<div class="col-xs-6 col-md-3 caixa">
			    <a href="grupo.php" class="thumbnail img">
			      <img class="foto-grupo" src="img/img13.jpg" alt="">
			      <div class="caption">
			        <h3> Móda 2017 </h3>
			      </div>
			    </a>
			</div>
			<div class="col-xs-6 col-md-3 caixa">
			    <a href="grupo.php" class="thumbnail img">
			      <img class="foto-grupo" src="img/img12.jpg" alt="Imagem de vários personagens de animes.">
			      <div class="caption">
			        <h3> Viva Anime </h3>
			      </div>
			    </a>
			</div>
			<div class="col-xs-6 col-md-3 caixa">
			    <a href="grupo.php" class="thumbnail img">
			      <img class="foto-grupo" src="img/img15.png" alt="Imagem do logo do youtube.">
			      <div class="caption">
			        <h3> Tubi News </h3>
			      </div>
			    </a>
			</div>
			<div class="col-xs-6 col-md-3 caixa">
			    <a href="grupo.php" class="thumbnail img">
			      <img class="foto-grupo" src="img/img11.jpg" alt="Um disco de música clássica">
			      <div class="caption">
			        <h3> Na Estrada </h3>
			      </div>
			    </a>
			</div>
			<div class="col-xs-6 col-md-3 caixa">
			    <a href="grupo.php" class="thumbnail img">
			      <img class="foto-grupo" src="img/img10.jpg" alt="Uma ilha">
			      <div class="caption">
			        <h3> Isooolaados </h3>
			      </div>
			    </a>
			</div>
		</div>
	</div>
</section>


<?php 
	include('footer.php');
 ?>

