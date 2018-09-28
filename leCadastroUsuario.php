<?php


include "conecta.php";

   
   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $senha = password_hash($_POST["senha"],PASSWORD_DEFAULT);
   $dataTemp = $_POST["dataNasc"];
  //echo "Data temporária ".$dataTemp;
  $arrayData = explode("/", $dataTemp);
  //var_dump($arrayData);
  $dataNasc = $arrayData[2]."-".$arrayData[1]."-".$arrayData[0];
   $stmt = $conn->prepare("insert into usuario (Nome,email,senha,data_nasc) values (?,?,?,?)");

 			$stmt->bindParam(1,$nome);
 			$stmt->bindParam(2,$email);
 			$stmt->bindParam(3,$senha);
 			$stmt->bindParam(4,$dataNasc);

	$stmt->execute();





?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta http-equiv="refresh" content=2;url="http://localhost:8080/infotec/CadastroUsuario.php">
	<title>Cadastro Usuário</title>
	  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="booststrap/js/bootstrap.min.js"></script>
</head>
<body>
     
       <h1 class="title" align="left" ><img src="logo.jpeg" class="img-rounded" height="150"></h1>
           <div class="jumbotron">
    <div class="container">
      <ul class="nav nav-tabs nav-pills nav-justified">
      <li class="active"><a href="">Administrativo</a></li>
      <li><a href="CadastroUsuario.php">Usuário</a></li>
      <li><a href="CadastroProduto.php">Produto</a></li>
      <li><a href="CadastroCategoria.php">Categoria</a></li>
      <li><a href="index.php">Home</a></li>
      </ul>
      </div>
      </div> <br>
     </div><br><br>


<div class="jumbotron"> 
   <h2 style="color:#4169E1" align="center">Usuário Cadastrado com Sucesso</h2>

    </div>


    
</body>
</html>
