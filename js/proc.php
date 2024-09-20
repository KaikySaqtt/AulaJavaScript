<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/iw.css">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/form.js"></script>
	
    <title>Consule seu CEP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="cor-fundo">
	<nav class="navbar">
	</nav>
    <div class="container">
        <form id="frm">
			<div class="row mt-5">
				<div class="col">
					<div class="mb-3">
						<label for="nome" class="form-label">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome">
					</div>
					<div class="mb-3">
						<label for="data" class="form-label">Data</label>
						<input type="date" class="form-control" id="data" name="data" >
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="mb-3">
						<label for="telefone" class="form-label">Telefone</label>
						<input type="tel" class="form-control" id="telefone" name="telefone">
					</div>
					<div class="mb-3">
						<label for="assunto" class="form-label">Assunto</label>
						<input type="text" class="form-control" id="assunto" name="assunto">
					</div>
                    <div class="mb-3">
						<label for="mensage" class="form-label">Mensagem</label>
						<input type="text" class="form-control" id="mensage" name="mensage">
					</div>
                    <div class="mb-3">
						<label for="senha" class="form-label">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha">
					</div>
                    <div class="mb-3">
						<label for="cpf" class="form-label">CPF</label>
						<input type="text" class="form-control" id="cpf" name="cpf">
					</div>
                    <div class="mb-3">
						<label for="rg" class="form-label">RG</label>
						<input type="text" class="form-control" id="rg" name="rg">
					</div>
            <div class="row mt-2 mb-3">
                <div class="col" id="json">
                    <button type="button" class="btn btn-success" onclick="enviaps()" data-toggle="modal" data-target="#exampleModal">>CADASTRAR</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<script src="js/cadastro.js"></script>

<?php

  include('banco.php');
  // variaveis vinda na url

  $cep = $_GET['cep'];
  $rua = $_GET['endereco'];
  $numero = $_GET['numero'];
  $comp = $_GET['complemento'];
  $cidade = $_GET['cidade'];
  $bairro = $_GET['bairro'];
  $uf =$_GET['uf'];


   // fazer um string sql 

   $sql = " INSERT INTO TB_CEP ( 
            CEP,
            RUA,
            NUMERO,
            COMP,
            BAIRRO,
            CIDADE,
            UF) 
            VALUES('$cep',
                   '$rua',
                   '$numero',
                   '$comp',
                   '$bairro',
                   '$cidade',
                   '$uf'
                   ) 
                   ";
    
    // executa o sql
    
   if(mysqli_query($conn, $sql)){
      echo "";
   }else{
       echo "VAROA QUE NÃO LAVA LOUÇA EU NÃO QUERO";
   }



   //
   mysqli_close($conn);
?>

