<?php
session_start();
if($_SESSION["usuario"] == "" || $_SESSION["usuario"]== null){
	header("location:login.php");
}




?>