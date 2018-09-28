<?php
include 'sessao.php'; 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Cadastro Usuário</title>
	 <link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="bootstrap/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="booststrap/js/bootstrap.min.js"></script>
  <script type="text/javascript">
        function validaSenha(){
          var senha = document.getElementById("senha")
          var confirmaSenha = document.getElementById("confirmaSenha");
          if(senha.value != confirmaSenha.value) {
            alert("Senhas diferentes, por favor insira as senha iguais!");
              confirmaSenha.focus();
                return false;
             } 
          }
    </script>
</head>
<body>
     
       <h1 class="title" align="left" ><img src="logo.jpeg" class="img-rounded" height="150"></h1>
           
<div class="jumbotron"> 
   <h2 style="color:#4169E1" align="center">Cadastre o usuário no formulario abaixo</h2> <br> 

<form action="leCadastroUsuario.php" method="POST"   onsubmit="return validaSenha()">
  <div>
    <label  class="control-label">Nome Completo:</label>
    <input type="text" class="form-control" id="nome" name="nome" maxlength="150" required="" >
   </div>

     <div>
    <label class="control-label">E-mail:</label>
    <input id="email" name="email" class="form-control" type="email" required="">
  </div>
   
   <div>
    <label class="control-label"> Senha:</label>
    <input id="senha" name="senha"   class="form-control" type="password" required="">
  </div>

   <div>
    <label class="control-label">Confirmar Senha:</label>
    <input id="confirmaSenha" name="confirmaSenha"   class="form-control" type="password" required="">
  </div>


      <div>
    <label class="control-label">Data de Nascimento: </label>
    <input  class="form-control" type="text"  name="dataNasc" required="">
  </div>
      
      <br>
     <button type="submit" class="btn btn-primary"> Cadastrar Usuário </button>


    </form> <br>
     <button><a href="Usuarios.php">Voltar</a></button>
    </div>


    
</body>
</html>