<?php
include 'sessao.php'; 
?>
<?php
$id = $_GET['id'];
 include "conecta.php";
$stmt =$conn->prepare("select * from produto where id_produto = ?");
$stmt->bindParam(1,$id);
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Alterar Produto</title>
	 <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="booststrap/js/bootstrap.min.js"></script>
</head>
<body>
     
       <h1 class="title" align="left" ><img src="logo.jpeg" class="img-rounded" height="150"></h1>
           
<div class="jumbotron"> 
   <h2 style="color:#4169E1" align="center">Altere os dados do Produto</h2> <br> 


  <?php
foreach($resultado as $linha){
}
?>
<form action="updateProduto.php" method="POST" enctype="multipart/form-data">
  <div>
    <label  class="control-label">Nome do Produto:</label>
    <input  type="text" class="form-control"  name="nome" maxlength="30" value="<?php echo $linha['nome_produto'];?>">
   </div> <br>
 
      <br>
   
   <div>
    
    <label class="control-label">Foto do Produto:</label>
    <img class="img-rounded" style="width: 300px; height: 250px"    src="imagens/<?php echo $linha['foto_produto']?>" >
    <input  class="form-control" type="file" name="arquivo" value="<?php echo $linha['foto_produto']?>" >

  
 
   
  </div> <br>

      <div>
    <label class="control-label">Preço: </label>
    <input  class="form-control" type="text" name="preco"  value=<?php echo $linha['preco'];?>>
  </div>

   <input type="hidden" name="id" value="<?php echo $linha['id_produto']?>">
   
      <br>
     <button type="submit" class="btn btn-primary">Alterar</button>

    </form> 

    <br>
     <button><a href="Produto.php">Voltar</a></button>
    
    </div>


    
</body>
</html>