<?php
require_once("cabecalho.php");
if (isset($_SESSION["email"]) == false && isset($_SESSION["id"]) == false) {
  $_SESSION["errorLogin"] ;
  header('location: login.php');
}

?>
