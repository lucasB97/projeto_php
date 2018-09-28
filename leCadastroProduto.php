
<?php
define('DEST_DIR', __DIR__ . '/imagens');
if (isset($_FILES['arquivo']) &&
!empty($_FILES['arquivo']['name']))
{
$arquivo = $_FILES['arquivo'];
if (!move_uploaded_file($arquivo['tmp_name'],
DEST_DIR . '/' . $arquivo['name']))
{
//echo "Erro ao enviar arquivo";
}
}
?>

<?php
  
  include "conecta.php";

   $nomeProduto =$_POST["nomeProduto"];
   $categoria =$_POST["categoria"];
   $fotoProduto=$arquivo['name'];
   $preco = $_POST["preco"];


       $stmt = $conn->prepare("insert into produto(nome_produto,id_categoria,foto_produto,preco) values (?,?,?,?)");
      
      $stmt->bindParam(1,$nomeProduto);
 			$stmt->bindParam(2,$categoria);
 			$stmt->bindParam(3,$fotoProduto);
      $stmt->bindParam(4,$preco);

	$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta http-equiv="refresh" content=2;url="http://localhost:8080/infotec/CadastroProduto.php">
	<title>Cadastro Produto</title>
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
      <li><a href="CadastroCategoria.php"> Categoria</a></li>
      <li><a href="index.php">Home</a></li>
      </ul>
      </div>
      </div> <br>
     </div><br><br>


<div class="jumbotron"> 
   <h2 style="color:#4169E1" align="center">Produto Cadastrado com Sucesso</h2>

    </div>
</body>
</html>