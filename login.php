<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="booststrap/js/bootstrap.min.js"></script>

</head>
<body>
   <h1 class="title" align="left" ><img src="logo.jpeg" class="img-rounded" height="150"></h1>
  <div class="jumbotron">
    <form action="verificaLogin.php" method="POST">
  <div>
    <label for="email" class="control-label">E-mail</label>
    <input id="email" name="email" class="form-control" type="email" required="">
  </div>
 
  <div>
    <label for="inputPassword" class="control-label">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha" required="">
  </div>
   <br>
  
 <Input type="submit" class="btn btn-primary" value="Entrar"> 
 
  </form> <br>
   <button><a href="index.php">Home</a> </button>

  </div>
</body>
</html>