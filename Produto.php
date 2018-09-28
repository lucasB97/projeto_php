<?php
include 'sessao.php'; 
?>
<?php
 include "conecta.php";
$stmt =$conn->prepare("select produto.*, categoria.nome_categoria from produto,categoria where produto.id_categoria = categoria.id_categoria ");
$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
  ?>
 <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Produtos</title>
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.min.css">
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
      <li><a href="Usuarios.php">Usuário</a></li>
      <li><a href="Produto.php">Produto</a></li>
      <li><a href="Categorias.php">Categoria</a></li>
      <li><a href="logout.php">Home</a></li>
      </ul>
      </div> <br> <br>
    <button><a href="CadastroProduto.php">Novo Produto</a></button> <br>

      <table class="table">
     <thead>
    <tr>
      <th>PRODUTOS</th> <th>CATEGORIA</th> <th>PREÇO</th>
    </tr>
  </thead>

  <?php


foreach($resultado as $linha){

?>
     <tr>
         <td><?php echo $linha['nome_produto']?></td><td><?php echo $linha['nome_categoria']?></td>
         <td><?php echo $linha['preco']?></td>
         <td><a href="alteraProduto.php?id=<?= $linha['id_produto'] ?>">Editar</a>
         </td>
       <td> <a href="excluirProduto.php?id=<?= $linha['id_produto'] ?>">Deletar</a> 
    </tr>



<?php 

}

?>



     </table>
      </div> <br>




</body>
</html>