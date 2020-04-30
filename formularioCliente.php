<?php
include 'menu.php';

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
						<h3 class="mb-0">Cadastro de Cliente</h3>
					</div>

					<div class="container" style="margin-top: 10px">
						<form action="./cadastros/inserir_cliente.php">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nome</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Nome " name="nome" required="" autofocus="" autocomplete="off">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Sobrenome</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Sobrenome" name="sobrenome" required=""  autocomplete="off">
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group">
										<label>E-Mail</label>
										<input type="email" class="form-control form-control-alternative"  placeholder="Digite um e-mail válido" name="email" required="" autocomplete="off">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label>CPF</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Digite um CPF válido" name="cpf" required="" autocomplete="off">
									</div>
								</div>

								




								<div class="col-md-6">
									<div class="form-group">
										<label>Endereço</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Endereço " name="endereco" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Número</label>
										<input type="number" class="form-control form-control-alternative"  placeholder="Número" name="numero" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Bairro</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Bairro" name="bairro" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Complemento</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Endereço " name="complemento" required=""  autocomplete="off">
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group">
										<label>Cidade</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Endereço " name="cidade" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="exampleFormControlSelect1">Estado</label>
										<select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="estado">
											<option value="AC">Acre</option>
											<option value="AL">Alagoas</option>
											<option value="AP">Amapá</option>
											<option value="AM">Amazonas</option>
											<option value="BA">Bahia</option>
											<option value="CE">Ceará</option>
											<option value="DF">Distrito Federal</option>
											<option value="ES">Espírito Santo</option>
											<option value="GO">Goiás</option>
											<option value="MA">Maranhão</option>
											<option value="MT">Mato Grosso</option>
											<option value="MS">Mato Grosso do Sul</option>
											<option value="MG">Minas Gerais</option>
											<option value="PA">Pará</option>
											<option value="PB">Paraíba</option>
											<option value="PR">Paraná</option>
											<option value="PE">Pernambuco</option>
											<option value="PI">Piauí</option>
											<option value="RJ">Rio de Janeiro</option>
											<option value="RN">Rio Grande do Norte</option>
											<option value="RS">Rio Grande do Sul</option>
											<option value="RO">Rondônia</option>
											<option value="RR">Roraima</option>
											<option value="SC">Santa Catarina</option>
											<option value="SP">São Paulo</option>
											<option value="SE">Sergipe</option>
											<option value="TO">Tocantins</option>
											<option value="EX">Estrangeiro</option>
											
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>CEP</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="CEP" name="cep" required=""  autocomplete="off">
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="exampleFormControlSelect1">Interesse</label>
										<select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="interesse">
											<option >Comprar</option>
											<option >Alugar</option>
											<option >Ambos</option>
											
											
										</select>
									</div>
								</div>
							</div>






							<div class="card-footer py-4">
								<div style="text-align: right">
									<button type="submit"  class="btn btn-primary">Cadastrar</button>
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