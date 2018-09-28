<?php
include 'sessao.php'; 
?>
<?php
$id = $_GET['id'];
 include "conecta.php";
$stmt =$conn->prepare("select * from usuario where id_usuario= ?");
$stmt->bindParam(1,$id);
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
     ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Alterar Usuário</title>
	 <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="booststrap/js/bootstrap.min.js"></script>
</head>
<body>
     
       <h1 class="title" align="left" ><img src="logo.jpeg" class="img-rounded" height="150"></h1>
           
<div class="jumbotron"> 
   <h2 style="color:#4169E1" align="center">Altere os dados do usuário</h2> <br> 


  <?php
foreach($resultado as $linha){
}
?>
<form action="updateUsuario.php" method="POST">
  <div>
    <label  class="control-label">Nome Completo:</label>
    <input  type="text" class="form-control" id="nome" name="nome" maxlength="150"  value="<?php echo $linha['Nome']?> ">
   </div><br>

     <div>
    <label class="control-label">E-mail:</label>
    <input class="form-control" id="email" name="email"  type="email" value="<?php echo $linha['email']?>">
  </div> <br>
  <input type="hidden" name="id" value="<?php echo $linha['id_usuario']?>">
      <div>
    <label class="control-label">Data de Nascimento: </label>
    <input  class="form-control" type="date" id="data" name="data" value="<?php echo $linha['data_nasc']?>" >
  </div> <br>
     <button type="submit" class="btn btn-primary">Alterar</button>

    </form> 

    <br>
     <button><a href="Usuarios.php">Voltar</a></button>
    
    </div>


    
</body>
</html>