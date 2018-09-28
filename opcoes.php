<?php

include "conecta.php";



   $stmt = $conn ->prepare("select * from categoria");

$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $linha) {  
$id = $linha['id_categoria'];
                
                   echo "<option value='$id'>".$linha['nome_categoria']."</option>" ;
                   
               

}
  ?>