<?php
require_once ("cabecalho.php");
require_once ("conexao-banco.php");

$usu=$_POST["pro"];
$nome  = $_POST["nome"];
$tipo = $_POST["tipo"];
$preco = $_POST["preco"];
$qtde = $_POST["qtde"];





$sql     = "insert into Produtos( nome,tipo,preco,qtde,total,produtor) values(?,?,?,?,?,?)";
$sqlprep = $conexao->prepare($sql);
$total =$qtde*$preco;
$sqlprep->bind_param("ssdiis" ,$nome,$tipo,$preco,$qtde,$total,$usu);
if ($sqlprep->execute()) {
    header("location: produtos.php");
} else {
    ?>

    <div class = "p-3 mb-2 bg-success text-white">Algo de errado amigão</div>

    <?php

}

?>
