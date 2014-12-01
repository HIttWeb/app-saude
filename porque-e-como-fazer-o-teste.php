<?php include('./inc/header-interna.php'); ?>

<?php include('./inc/timeline.php'); ?>

<div class="conteudo-interno">
	<?php include('./inc/breadcrumb.php'); ?>
	<div class="topo-interna">
		<img src="./images/topo-interna-porque-e-como-fazer-o-teste.png" alt="">
		<h2>Porque e como<br>fazer o teste</h2>
	</div>
	<div class="wrap-content porque-fazer">
		<div class="wrap-abas">
			<ul class="tabs">
				<li>
					<a id="porque" class="tab" href="javascript:void(0);">porque<br>fazer o<br>teste <span>?</span></a>
				</li>
				<li>
					<a id="como" class="tab" href="javascript:void(0);">como é<br>feito o<br>exame <span>?</span></a>
				</li>
				<li>
					<a id="onde" class="tab ativo" href="javascript:void(0);">onde<br>fazer o<br>teste <span>?</span></a>
				</li>
			</ul>
			<div class="tabs-content-container">
				<div id="porque" class="tab-content">
					<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para.</p>
					<img src="./images/img-porque-fazer-o-teste.png" alt="">
				</div>
				<div id="como" class="tab-content">
					<img src="./images/img-como-e-feito-o-teste.png" alt="">
				</div>
				<div id="onde" class="tab-content ativo">
					<form action="">
						<label for="estado">estado</label>
						<select id="estado" name="estado">
						  <option value="DF">DF</option>
						</select>
						<label for="cidade">cidade</label>
						<select id="cidade" name="cidade">
							<option value="brasilia">Brasília</option>
						</select>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('./inc/footer.php'); ?>