
<div class="row">              
	<div class="col-lg-12">
		<form class="card" method="post">
			<div class="card-body">
				<h3 class="card-title">Novo produto</h3>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="form-label">Descrição</label>
							<input required type="text" class="form-control" name="descricao" placeholder="Arroz..">
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="form-group">
							<label class="form-label">Estoque</label>
							<input required type="number" class="form-control" placeholder="10.." name="estoque">
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="form-group">
							<label class="form-label">Código de barras</label>
							<input required type="number" class="form-control" placeholder="78978978978978" name="codigoBarra">
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="form-group">
							<label class="form-label">Valor unitário</label>
							<div class="input-group">
								<span class="input-group-prepend">
									<span class="input-group-text">R$</span>
								</span>
								<input required type="text" class="form-control text-right" aria-label="Valor" name="valor">                         
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