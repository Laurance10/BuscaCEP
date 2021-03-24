<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">

<head>
	<script src="//code.jquery.com/jquery-2.2.2.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<meta charset="utf-8">
	<title>Busca CEP</title>
	
	<script type="text/javascript">

		$(function() {

			$('#btn_consulta').click(function() {

				let cep = $('#cep').val();

				if(cep == "") {

					alert("Favor informar um CEP!");
					$("#cep").focus();
					return false;
				}

				$("#btn_consulta").html('Pesquisando...');

				$.get("index.php/home/consulta", {

					cep: cep
				}, function(data) {

					$("#rua").val(data.logradouro);
					$("#bairro").val(data.bairro);
					$("#cidade").val(data.localidade);
					$("#estado").val(data.uf);
					$("#estado").val(data.uf);
					$("#btn_consulta").html('Consulta');
				}, 'json');
			});
		});

	</script>
</head>

<body>

	<div class="container">

		<h2>Busca CEP</h2>

		<div class="panel panel-default">
			<div class="panel-heading">
				Digite o CEP
			</div>

			<div class="panel-body">
				<div class="col-md-4">
					<div class="form-group">
						<label for="cep">CEP:</label>
						<input type="text" name="cep" id="cep" class="form-control"
						autofocus required placeholder="Somente números" />
					</div>

					<div class="form-group">
						<button id="btn_consulta" class="btn
						btn-success">Consultar</button>
					</div>

					<div class="form-group">
						<label for="rua">Rua:</label>
						<input type="text" name="rua" id="rua" class="form-control" disabled required />
					</div>
					<div class="form-group">
						<label for="bairro">Bairro:</label>
						<input type="text" name="bairro" id="bairro" class="form-control" disabled required />
					</div>
					<div class="form-group">
						<label for="cidade">Cidade:</label>
						<input type="text" name="cidade" id="cidade" class="form-control" disabled required />
					</div>
					<div class="form-group">
						<label for="estado">Estado:</label>
						<input type="text" name="estado" id="estado" class="form-control" disabled required />
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>