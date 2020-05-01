<?php
require'conexao/conexao.php';
include 'menu.php';
$id =  $_GET['id'];


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<div class="container-fluid mt--7">
		<!-- Table -->
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header border-1">
						<h3 class="mb-0">Editar Status Imóvel</h3>
					</div>

					<div class="container" style="margin-top: 10px">
						<form action="/dashboard/cadastros/inserir_categoria.php" method="get">
							<div class="row">
								<div class="col-md-6">
									<?php
										$sql = "SELECT * FROM imovel where id_imovel = $id";
										$busca = $conexao->query($sql);
										 	
										while($dados = mysqli_fetch_array($busca)){
											$idimovel = $dados['id_imovel'];
											$codigo = $dados['codigo_imovel'];

									?>

									<div class="form-group">
										<label>Código do Imóvel</label>
										<input type="text" class="form-control form-control-alternative" value="<?php echo $codigo?>" id='codigo' name="codigo" readonly>
									</div>
										<?php } ?>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="corretor">Corretor</label>
										<select name="usuariol" id="usuario" class="form-control">
											<option value="">Selecione</option>
											<?php
												$sql = "SELECT * FROM usuario";
												$buscar = $conexao->query($sql);
												var_dump($buscar);die();
												while($dados = mysqli_fetch_array($buscar)){
													$idusuario = $dados['id_usuario'];
													$nome = $dados['nome_usuario'];
													$usuario = $dados['usuario'];
												

											?>
											<option value="usuario"><?php echo $usuario?></option>
										<?php } ?>
										</select>
									</div>
								</div>
							</div>

							<div class="card-footer py-4">
								<div style="text-align: right">
									<button type="submit" class="btn btn-primary">Cadastrar</button>
								</div>
							</div>
						</form>
					</div>



					

				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<!-- Footer -->
		<footer class="footer">
			<div class="row align-items-center justify-content-xl-between">
				<div class="col-xl-6">
					<div class="copyright text-center text-xl-left text-muted">
						&copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
					</div>
				</div>
				<div class="col-xl-6">
					<ul class="nav nav-footer justify-content-center justify-content-xl-end">
						<li class="nav-item">
							<a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
						</li>
						<li class="nav-item">
							<a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
						</li>
						<li class="nav-item">
							<a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
						</li>
						<li class="nav-item">
							<a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
						</li>
					</ul>
				</div>
			</div>
		</footer>
	</div>


	<?php 
	include 'rodape.php';
	?>

</body>
</html>