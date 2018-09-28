<?php
include 'sessao.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Cadastro Produto</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="booststrap/js/bootstrap.min.js"></script>
</head>
<body>
      <h1 class="title" align="left" ><img src="logo.jpeg" class="img-rounded" height="150"></h1>
  
         

         <div class="jumbotron"> 
   <h2 style="color:#4169E1" align="center">Cadastre um novo produto abaixo</h2>
<form action="leCadastroProduto.php" method="POST" enctype="multipart/form-data">
  <div>
    <label  class="control-label">Nome do produto:</label>
    <input type="text" class="form-control" id="inputPassword" maxlength="30"  name="nomeProduto" required="">
   </div><br>

     <div>
    <label class="control-label">Categoria</label>
         <select name="categoria" required="">
             <?php  include('opcoes.php') ?>
             </select>
  </div> <br>
   
   <div>
    <label class="control-label">Foto do Produto</label>
    <input  class="form-control" type="file" name="arquivo" required="">
  </div>
    <br>
    <div>
    <label class="control-label">Preço</label>
    <input  class="form-control" type="text" name="preco" required="">
  </div>
      <br>
     <button type="submit" class="btn btn-primary">Cadastrar Produto</button>


    </form> <br>
    <button><a href="Produto.php">Voltar</a></button>
    </div>








   

         
</body>
</html>