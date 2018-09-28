<?php
 
 include "conecta.php";
  $email = $_POST["email"];
  $senha = $_POST["senha"];

try{ 

$stmt =$conn->prepare("select * from usuario where email = ? ");

$stmt->bindParam(1, $email);


$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($resultado as $linha){
		if(password_verify($senha, $linha["senha"])){
			session_start();
			$_SESSION["email"]=$email;
			$_SESSION["usuario"]=$linha["id_usuario"];
           header('Location:adm.php');
	             }
	             else{
	             	echo "<script>
	             	alert('senha ou email invalidos');
	             	 document.location=('login.php');
	             	</script>";
	                   }

		 }

       

	}catch(PDOException $e){
		echo $e->getMessage();
	}


 

?>