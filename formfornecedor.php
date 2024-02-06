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
				<form action="" method="post">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Cadastro do Fornecedor</h1>

						<form class="row g-3">
							<div class="col-md-6">
								<label for="nome" class="form-label">Nome</label>
								<input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome do fornecedor" required>
							</div>
							<div class="col-md-6">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Digite o e-mail do fornecedor no formato abc@mail.com" required>
							</div>
							<div class="col-md-6">
								<label for="telefone" class="form-label">Telefone</label>
								<input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(99) 9 9999-9999" required>
							</div>
							<div class="col-md-6">
								<label for="produtofornecido" class="form-label">Produto Fornecido</label>
								<input type="text" class="form-control" name="produtofornecido" id="produtofornecido" placeholder="Digite o nome do produto fornecido" required>
							</div>
							<div class="col-md-6">
								<label for="produtofornecido" class="form-label">Produto Fornecido</label>
								<input type="text" class="form-control" name="produtofornecido" id="produtofornecido" placeholder="Digite o nome do produto fornecido" required>
							</div>
							<div class="col-md-6">
								<label for="produtofornecido" class="form-label">Produto Fornecido</label>
								<input type="text" class="form-control" name="produtofornecido" id="produtofornecido" placeholder="Digite o nome do produto fornecido" required>
							</div>
							
						</form>
					</div>
					<input type="submit" class="btn btn-primary btn-lg" value="Salvar">
				</form>
			</main>


			<footer class="footer">
				<?php include 'footer.php' ?>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>