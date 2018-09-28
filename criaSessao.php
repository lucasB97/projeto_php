<?php
  session_start();
  if(($_SESSION["nome"] == "")||($_SESSION["nome"] == null)){
  	header('location:index.php');
  }
  
?>