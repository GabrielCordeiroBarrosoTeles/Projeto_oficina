<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAD OS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

<script>

  function ok() {
      setTimeout("windows.location.href='cadastro.php'");
  }


 </script>
</head>

<body>
   <h3>Recebendo dados da Ordem de Serviço: </h3>
  <?php
     
     include "conexao.php";

    $nome_cliente   = $_POST['nome_cliente'];
    $cpf            = $_POST['cpf'];
    $telefone       = $_POST['telefone'];
    $email          = $_POST['email'];
    $rua            = $_POST['rua'];
    $numero         = $_POST['numero'];
    $bairro         = $_POST['bairro'];
    $placa          = $_POST['placa'];
    $marca          = $_POST['marca'];
    $modelo         = $_POST['modelo'];
    $quilomatragem  = $_POST['quilometragem'];
    $ano_fabricacao = $_POST['ano_fabricacao'];
    $descricao_1    = $_POST['descricao_1'];
    $valor_1        = $_POST['valor_1'];
    $descricao_2    = $_POST['descricao_2'];
    $valor_2        = $_POST['valor_2'];
    $descricao_3    = $_POST['descricao_3'];
    $valor_3        = $_POST['valor_3'];
    $descricao_4    = $_POST['descricao_4'];
    $valor_4        = $_POST['valor_4'];
    $descricao_5    = $_POST['descricao_5'];
    $valor_5        = $_POST['valor_5'];
    $descricao_6    = $_POST['descricao_6'];
    $valor_6        = $_POST['valor_6'];
    $descricao_7    = $_POST['descricao_7'];
    $valor_7        = $_POST['valor_7'];
    $descricao_8    = $_POST['descricao_8'];
    $valor_8        = $_POST['valor_8'];
  $valor_pecas     = $_POST['valor_pecas'];
  $desc_mao_de_obra = $_POST['desc_mao_de_obra'];
  $valor_mao_de_obra = $_POST['valor_mao_de_obra'];
  $data_atual        = $_POST['data_atual'];
  $data_entrega        = $_POST['data_entrega'];

$inserir = $con -> query("INSERT INTO ordemservico VALUES
(0,'$nome_cliente','$cpf','$telefone','$email',
'$rua','$numero','$bairro','$placa','$marca',
'$modelo','$quilometragem','$ano_fabricacao',
'$descricao_1','$valor_1','$descricao_2','$valor_2',
'$descricao_3','$valor_3','$descricao_4','$valor_4',
'$descricao_5','$valor_5','$descricao_6','$valor_6',
'$descricao_7','$valor_7','$descricao_8','$valor_8',
'$valor_pecas','$desc_mao_de_obra','$valor_mao_de_obra',
'$data_atual','$data_entrega')");

if($inserir){
    echo "Cadastro realizado com sucesso!!!";
    echo "<script>ok()</script>";
} else {
    echo "Cadastro realizado com sucesso!!!";
    echo "<script>ok()</script>";
}

   ?> 




</body>

</html>

