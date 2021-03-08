<?php 

	$resultados = '';

	foreach($produtos as $produto){

		$resultados .= '<tr>
							<td>'.$produto->descricao.'</td>
							<td> R$ '.$produto->valor.'</td>
							<td>'.$produto->estoque.'</td>
							<td> - </td>
							<td> - </td>                         
							<td>
								<a class="icon" href="./form-produto-edit.html">
									<i class="fe fe-edit"></i>
								</a>			    
							</td>
							<td>
								<a class="icon" href="javascript:void(0)">
									<i class="fe fe-trash"></i>
								</a>			    
							</td>
						</tr>';
		
	}

	$resultados = strlen($resultados) ? $resultados : '<tr>
															<td colspan="6" class="text-center">
																Nenhum produto encontrado
															</td>
														</tr>';


?>


<div class="row row-cards row-deck">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Produtos</h3>
				<div class="card-options">
					<a href="/form-produto.php" class="btn btn-azure">Adicionar</a>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table card-table table-vcenter text-nowrap">
					<thead>
						<tr>
							<th>Descrição</th>
							<th>Valor unitário</th>
							<th>Estoque</th>
							<th>Data última venda</th>
							<th>Total de vendas</th>                          
							<th class="w-1"></th>
							<th class="w-1"></th>
						</tr>
					</thead>
					<tbody>
						<?=$resultados?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
