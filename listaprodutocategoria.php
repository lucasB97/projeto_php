<?php
$id = $_GET['id'];

 include "conecta.php";
$stmt =$conn->prepare("select * from produto where id_categoria = ? ");
$stmt->bindParam(1, $id);
$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html >
<head>
	<title>Pagina Inical</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="booststrap/js/bootstrap.min.js"></script>
</head>
<body>

   <h1 class="title" align="left" ><img src="logo.jpeg" class="img-rounded" height="150"></h1>
     <div style="background:white !important" class="jumbotron">
 <div class="container">
       
      <ul class="nav nav-tabs nav-pills nav-justified">
      <li class="active"><a href="">Produtos</a></li>
      <li><a href="index.php">Voltar</a></li>
      </ul>
      </div>

<br>

<div class="row" style="
    margin-left: 90px;
">
<?php


foreach($resultado as $linha){

?>
 
        <div class="col-md-4 col-6">
          
            <img class="img-rounded" style="width: 300px; height: 250px"    src="imagens/<?php echo $linha['foto_produto']?>" >

            <h3 style="text-align:;"><?php echo $linha['nome_produto']?>
              <p class="text-gray-dark"> R$:<?php echo $linha['preco']?></p>
            </h3>
            
         
        </div>
<?php }?>
</div>



      </div>
                        
       
    
  

  </body>
  </html>