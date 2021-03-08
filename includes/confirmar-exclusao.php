<main>

	<h2 class="mt-3">Excluir produto</h2>

	<form method="post">

		<div class="form-group">
			<p>Você deseja realmente excluir o produto <strong><?=$objProduto->descricao?></strong>?</p>
		</div>

		<div class="form-group">
			<a href="produtos.php">
				<button type="button" class="btn btn-success">Cancelar</button>
			</a>

			<button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
		</div>

	</form>

</main>