<?php
include 'sessao.php'; 
?>
<?php
$id = $_GET['id'];
 include "conecta.php";
$stmt =$conn->prepare("delete  from usuario where id_usuario = ?");
$stmt->bindParam(1, $id);
$stmt->execute();

 
  ?>
  <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta http-equiv="refresh" content=2;url="http://localhost:8080/infotec/Usuarios.php">
	<title>Usuário</title>
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
      <li><a href="Usuarios.php"> Usuário</a></li>
      <li><a href="Produto.php"> Produto</a></li>
      <li><a href="Categorias.php"> Categoria</a></li>
      <li><a href="index.php">Home</a></li>
      </ul>
      </div>
      </div> <br>
     </div><br><br>


<div class="jumbotron"> 
   <h2 style="color:#4169E1" align="center">Usuário Deletado</h2>

    </div>


    
</body>
</html>