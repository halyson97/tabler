
<?php 

	$resultados = '';

	foreach($produtos as $produto){

		$resultados .= '<tr>
							<td>'.$produto->descricao.'</td>
							<td> R$ '.$produto->valor.'</td>
							<td>'.$produto->estoque.'</td>
							                   
							<td>
								<a class="icon" href="#">
									<i class="fe fe-refresh-ccw"></i>
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
				<h3 class="card-title">Produtos excluídos</h3>		      
			</div>
			<div class="table-responsive">
				<table class="table card-table table-vcenter text-nowrap">
					<thead>
						<tr>
							<th>Descrição</th>
							<th>Valor unitário</th>
							<th>Estoque</th>                                                    
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
					