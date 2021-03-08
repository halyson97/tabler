<?php


	$mensagem = '';
	if (isset($_GET['status'])) {
		switch ($_GET['status']) {
			case 'success':
				$mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
				break;

			case 'error':
				$mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
				break;
		}
	}

	$resultadosProdutos = '';

	foreach ($produtos as $produto) {

		$resultadosProdutos .= '
						<option value="'.$produto->idprodutos.'">'.$produto->descricao.'</option>';
	}

	$adicionarProdutos = strlen($resultadosProdutos) ? '' : '<div class="card-options">
												<a href="/form-produto.php" class="btn btn-azure">Adicionar produtos</a>
											</div>'; 

	$resultadosProdutos = strlen($resultadosProdutos) ? $resultadosProdutos : '<option disabled value="">Nenhum produto encontrado</option>';

	$resultadosVendas = '';

	foreach ($vendas as $venda) {

		$resultadosVendas .= '
								<tr>
									<td>Nome do produto</td>
									<td>'.$venda->quantidade.'</td>
									<td>R$ '.$venda->valor_unitario.'</td>
									<td>R$ '.$venda->valor_total.'</td>
								</tr>
								
		';
	}

	$resultadosVendas = strlen($resultadosVendas) ? $resultadosVendas : '<tr><td colspan="6" class="text-center">Nenhuma venda encontrada</td></tr>';

?>


<div class="row">
	<div class="col-lg-12">
		<form class="card" method="post">
			<div class="card-body">
				<h3 class="card-title">Realizar venda de um produto</h3>
				<?=$adicionarProdutos?>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="form-label">Produto</label>
							<select class="form-control custom-select" name="produto">
								<?=$resultadosProdutos?>
							</select>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="form-group">
							<label class="form-label">Quantidade</label>
							<input required type="number" name="quantidade" class="form-control" placeholder="Digite aqui a quantidade">
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="form-group">
							<label class="form-label">Valor unitário</label>
							<div class="input-group">
								<span class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</span>
								<input required type="text" name="valor" class="form-control text-right" aria-label="Valor">
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="form-group">
							<label class="form-label">Valor total</label>
							<div class="input-group">
								<span class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</span>
								<input required type="text" name="valorTotal" class="form-control text-right" aria-label="Valor" disabled="disabled" title="Este campo não pode ser alterado">
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-12">
						<div class="form-group">
							<div class="form-label">&nbsp;</div>
							<div class="custom-controls-stacked">
								<label class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="atualizarProduto" checked>
									<span class="custom-control-label">Atualizar valor unitário do produto</span>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer text-left" style="display: flex; justify-content: space-between">
				<div>
					<a href="/produtos.php" class="btn btn-secondary">Voltar para produtos</a>
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Confirmar</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
</div>
<div class="my-3 my-md-5">
	<div class="container">
		<div class="row row-cards row-deck">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Últimas vendas realizadas</h3>
					</div>
					<div class="table-responsive">
						<table class="table card-table table-vcenter text-nowrap">
							<thead>
								<tr>
									<th>Produto</th>
									<th>Quantidade</th>
									<th>Valor unitário</th>
									<th>Valor total da venda</th>
								</tr>
							</thead>
							<tbody>
								<?=$resultadosVendas?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>