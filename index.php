<?php include('./inc/header.php'); ?>

<section class="video-campanha">
	
</section>

<section class="timeline">
	
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