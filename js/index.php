<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="js/form.js"></script>

	
    <title>Consule seu CEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="cor-fundo">
	<nav class="navbar d-flex justify-content-center">
		<h2 class="texto ">Consulte as informações do seu CEP aqui</h2>
	</nav>
    <div class="container">
        <form id="frm">
            <div class="row mt-5 ms-5">
				<div class="col-10">
					<div class="input-group cep">
						<label for="cep" class="form-label p-2">CEP</label>
						<input type="text" class="form-control" placeholder="Digite seu CEP" id="cep" name="cep">
						<button class="btn btn-secondary" type="button">Enviar</button>
					</div>
				</div>
            </div>
			<div class="row mt-5">
				<div class="col">
					<ul id="sortable">
					<div class="mb-3">
						<label for="endereco" class="form-label">Endereço</label>
						<input type="text" class="form-control" id="endereco" name="endereco">
					</div>
					<div class="mb-3">
						<label for="complemento" class="form-label">Complemento</label>
						<input type="text" class="form-control" id="complemento" name="complemento" >
					</div>
					<div class="mb-3">
						<label for="bairro" class="form-label">Bairro</label>
						<input type="text" class="form-control" id="bairro" name="bairro">
					</div>
					<div class="mb-3">
						<label for="cidade" class="form-label">Cidade</label>
						<input type="text" class="form-control" id="cidade" name="cidade">
					</div>
					<div class="mb-3">
						<label for="nr" class="form-label">Número*</label>
						<input type="text" class="form-control" placeholder="Digite o número do seu lar" id="nr" name="numero">
					</div>
					<select class="form-select" id="uf" aria-label="Default select example" name="uf">
						<option selected>Escolha seu Estado</option>
						<option value="AC">AC</option>
						<option value="AL">AL</option>
						<option value="AP">AP</option>
						<option value="AM">AM</option>
						<option value="BA">BA</option>
						<option value="CE">CE</option>
						<option value="DF">DF</option>
						<option value="ES">ES</option>
						<option value="GO">GO</option>
						<option value="MA">MA</option>
						<option value="MT">MT</option>
						<option value="MS">MS</option>
						<option value="MG">MG</option>
						<option value="PA">PA</option>
						<option value="PB">PB</option>
						<option value="PR">PR</option>
						<option value="PE">PE</option>
						<option value="PI">PI</option>
						<option value="RJ">RJ</option>
						<option value="RN">RN</option>
						<option value="RS">RS</option>
						<option value="RO">RO</option>
						<option value="RR">RR</option>
						<option value="SC">SC</option>
						<option value="SP">SP</option>
						<option value="SE">SE</option>
						<option value="TO">TO</option>
					</select>
				</div>
			</div>
            <div class="row mt-2 mb-3">
                <div class="col" id="json">
                    <button type="button" class="btn btn-success" onclick="envia()">PRÓXIMO</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<script src="js/cadastro.js"></script>