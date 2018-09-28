<?php

try {

 	$conexao = new PDO('mysql:host=localhost ; port=8889 ; dbname=livraria', "root" , "@luno1fpe");
 		$conexao-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


 		$stmt = $conexao->prepare("select id, nome, rg, sexo from cliente where nome like ?");


 		$id = "0002";

 		$stmt->bindParam(1,$nome);

 		$stmt->execute();


 		$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

 				/* AQUI É SEM FILTRO $resultado = $conexao->query("select id, nome, rg, sexo from cliente");

 				 var_dump($resultado); */

 				 /*like=Consulta de string no banco de dados*/


 				 foreach ($resultado as $linha) {
 				 	echo "<br><br>";
 				 	echo "O cliente de Identificador ".$linha["id"].", se chama ".$linha["nome"].". O RG é ".$linha["rg"]." e o sexo é ".($linha["sexo"]=="M"?"Masculino":"Feminino");
 				 }



 		} catch (Exception $e) {
 		echo $e->getMessage();
 	}	

?>