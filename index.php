<?php include('./inc/header.php'); ?>

<section class="video-campanha">
	<a class="link-filme" href="javascript:void(0);">
		<img src="./images/bg-video-campanha.jpg" alt="">
	</a>

	<div class="wrap-video">
		<div class="content-video">
			<a href="javascript:void(0);" class="close-btn" title="Fechar Janela"></a>
			<video width="600" controls>
				<source src="./video/big_buck_bunny_720p_surround.avi" type="video/mp4">
				<source src="./video/big_buck_bunny_480p_stereo.ogg" type="video/ogg">
				Your browser does not support HTML5 video.
			</video>
		</div>
	</div>
	
</section>

<?php include('./inc/timeline.php'); ?>

<section class="mosaico">
	<div class="wrap-abas">
		<ul class="tabs">
			<li>
				<a id="prevencao" class="tab" href="javascript:void(0);">prevenção</a>
			</li>
			<li>
				<a id="teste" class="tab" href="javascript:void(0);">teste</a>
			</li>
			<li>
				<a id="tratamento" class="tab" href="javascript:void(0);">tratamento</a>
			</li>
			<li>
				<a id="todos" class="tab ativo" href="javascript:void(0);">todos</a>
			</li>
		</ul>
		<div class="tabs-content-container">
			<?php include('./inc/prevencao.php'); ?>
			<?php include('./inc/teste.php'); ?>
			<?php include('./inc/tratamento.php'); ?>
			<?php include('./inc/todos.php'); ?>
		</div>
	</div>
</section>

<?php include('./inc/footer.php'); ?>