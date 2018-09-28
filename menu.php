
<nav class="nav-sidebar">
<ul class="nav">

<?php

include "conecta.php";



   $stmt = $conn ->prepare("select * from categoria");

$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $linha) {  
$id = $linha['id_categoria'];
                
                   echo "<li><a href='listaprodutocategoria.php?id=$id'>".$linha['nome_categoria']."</a></li>" ;
                   
               

}
  ?>
</ul>
</nav>