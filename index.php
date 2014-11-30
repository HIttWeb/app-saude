<?php include('./inc/header.php'); ?>

<section class="video-campanha">
	<a class="link-filme" href="javascript:void(0);">
		<img src="./images/bg-video-campanha.jpg" alt="">
	</a>
	<span class="tag">filme da campanha</span>

	<div class="wrap-video">
		<div class="content-video">
			<a href="javascript:void(0);" class="close-btn" title="Fechar Janela"></a>
		</div>
	</div>
	
</section>

<section class="timeline">
	<h2>30 anos de luta e fatos históricos</h2>
</section>

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