<?php
include 'sessao.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Cadastrar Categoria</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="booststrap/js/bootstrap.min.js"></script>
</head>
<body>
      <h1 class="title" align="left" ><img src="logo.jpeg" class="img-rounded" height="150"></h1>
      
        
        <div class="jumbotron"> 
   <h2 style="color:#4169E1" align="center">Cadastre uma nova categoria para os produtos</h2>
<form  action="leCadastroCategoria.php" method="POST">
  <div>
    <label  class="control-label">Nome da categoria:</label>
    <input type="text" class="form-control" id="inputPassword" maxlength="150" name="nomeCategoria" required="">
   </div> <br>
    <button type="submit" class="btn btn-primary">Nova Categoria</button>

  </form> <br>
  <button><a href="Categorias.php">Voltar</a></button>
    
</body>
</html>