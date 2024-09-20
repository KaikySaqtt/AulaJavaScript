<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="js/redireciona.js"></script>
   <title>Concluído</title>
</head>
<body>
      <div>
         <p></p>
      </div>
</body>
</html>

<?php

  include('banco.php');
  // variaveis vinda na url
  $nome = $_GET['nome'];
  $data = $_GET['data'];
  $email = $_GET['email'];
  $telefone = $_GET['telefone'];
  $assunto = $_GET['assunto'];
  $mensage = $_GET['mensage'];
  $senha = $_GET['senha'];
  $cpf = $_GET['cpf'];
  $rg = $_GET['rg'];


   // fazer um string sql 

   $sql = " INSERT INTO TB_PESSOAL (
               NOME,
               DATANASC,
               EMAIL,
               TELEFONE,
               ASSUNTO,
               MENSAGEM,
               SENHA,
               CPF,
               RG
               )
               VALUES(
                  '$nome',
                  '$data',
                  '$email',
                  '$telefone',
                  '$assunto' ,
                  '$mensage ',
                  '$senha',
                  '$cpf',
                  '$rg'
               )

                   ";
    
    // executa o sql
    
   if(mysqli_query($conn, $sql)){
      echo "<p>Registro concluído com sucesso!! Redirecionando em </p> <p id=\"segundos\">5</p> <p>segundos. </p>";
   }else{
       echo "não escola não é lugar de dormir!!!";
   }



   //
   mysqli_close($conn);
?>

