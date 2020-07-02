<?php
require_once ("cabecalho.php");
require_once ("conexao-banco.php");


$nome  = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$adm   = $_POST["adm"];





$sql     = "insert into usuarios( email,senha,nome,adm) values(?,?,?,?)";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("sssi" ,$email,$senha,$nome,$adm);
if ($sqlprep->execute()) {
    header("location: login.php");
} else {
    ?>

    <div class = "p-3 mb-2 bg-success text-white">Algo de errado amigão</div>

    <?php

}

?>
