<main>

	<h2 class="mt-3">Restaurar produto</h2>

	<form method="post">

		<div class="form-group">
			<p>Você deseja restaurar o produto <strong><?=$objProduto->descricao?></strong>?</p>
		</div>

		<div class="form-group">
			<a href="lixeira.php">
				<button type="button" class="btn btn-danger">Cancelar</button>
			</a>

			<button type="submit" name="restaurar" class="btn btn-success">Restaurar</button>
		</div>

	</form>

</main>