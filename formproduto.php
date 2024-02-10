<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php include 'header.php' ?>

<body>
	<div class="wrapper">
		<?php include 'menu.php' ?>
		<div class="main">
			<?php include 'topo.php' ?>

			<main class="content">
				<form action="cadastroproduto.php" method="post">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Cadastro de Produtos</h1>

						<div class="row">
							<div class="mb-3 col-6">
								<label for="produto" class="form-label">Produto</label>
								<input type="text" class="shadow form-control" name="produto" id="produto" placeholder="Digite o nome do produto">
							</div>
							<div class="mb-3 col-6">
								<label for="descricao" class="form-label">Descrição</label>
								<textarea class="shadow form-control" name="descricao" id="descricao" rows="3"></textarea>
							</div>
							<div class="mb-3">
								<label for="categoria" class="form-label">Categoria de Produto</label>
								<select class="shadow form-select form-select-lg" name="categoria" id="categoria">
									<option value="bebidaquente">Bebida Quente</option>
									<option value="bebidagelada">Bebida Gelada</option>
									<option value="boloesobremesa">Bolo e Sobremesa</option>
									<option value="sanduicheesalgado">Sanduíche e Salgado</option>
								</select>
							</div>
							<div class="mb-3 col-6">
								<label for="estoque" class="form-label">Estoque</label>
								<input type="number" class="shadow form-control" name="estoque" id="estoque" min="0" max="200" step="1">
							</div>
							<div class="mb-3 col-6">
								<label for="preco" class="form-label">Preço</label>
								<input type="number" class="shadow form-control" name="preco" id="preco" min="0" max="200" step="1">
							</div>
						</div>
					</div>
					<input type="submit" class="btn btn-primary btn-lg" value="Salvar">
				</form>
			</main>
			<div class="main">
				<div class="container">
					<div class="table-responsive">
						<table class="table table-striped table-light table-hover">
							<thead class="table-dark">
								<tr>
									<th scope="col">Produto</th>
									<th scope="col">Descrição</th>
									<th scope="col">Categoria</th>
									<th scope="col">Preço</th>
									<th scope="col">Estoque</th>
									<th scope="col">Ações</th>
								</tr>
							</thead>
							<tbody class="table-group-divider">
								<?php
								include 'conexao.php';
								$sql = "SELECT * FROM produtos";
								$busca = mysqli_query($conexao, $sql);
								while ($dados = mysqli_fetch_array($busca)) {
									$produto = $dados['produto'];
									$descricao = $dados['descricao'];
									$categoria = $dados['categoria'];
									$preco = $dados['preco'];
									$estoque = $dados['estoque'];
								?>
									<tr>
										<td><?php echo $produto ?></td>
										<td><?php echo $descricao ?></td>
										<td><?php echo $categoria ?></td>
										<td><?php echo $preco ?></td>
										<td><?php echo $estoque ?></td>
										<td>
											<!-- Modal trigger button -->
											<button type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#modaleditarproduto">
												<i class="fa-solid fa-user-pen"></i>
												Editar
											</button>

											<!-- Modal Body -->
											<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
											<div class="modal fade" id="modaleditarproduto" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
												<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="modalTitleId">
																Modal title
															</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">Body</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
																Fechar
															</button>
															<button type="button" class="btn btn-primary">Salvar</button>
														</div>
													</div>
												</div>
											</div>

											<!-- Modal trigger button -->
											<button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal" data-bs-target="#modalexcluirproduto">
												<i class="fa-solid fa-trash"></i>
												Excluir
											</button>

											<!-- Modal Body -->
											<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
											<div class="modal fade" id="modalexcluirproduto" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
												<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="modalTitleId">
																Modal title
															</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">Deseja realmente excluir?</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
																Voltar
															</button>
															<button type="button" class="btn btn-danger">Excluir</button>
														</div>
													</div>
												</div>
											</div>

											<!-- Optional: Place to the bottom of scripts -->
											<script>
												const editModal = new bootstrap.Modal(
													document.getElementById("modaleditarproduto"),
													options,
												);

												const deleteModal = new bootstrap.Modal(
													document.getElementById("modalexcluirproduto"),
													options,
												);
											</script>
										</td>
									</tr>

								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>

			</div>

			<footer class="footer">
				<?php include 'footer.php' ?>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>