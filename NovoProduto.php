<?php
require_once ("cabecalho.php");
require_once ("conexao-banco.php");


$nome  = $_POST["nome"];
$preco = $_POST["preco"];
$qtde = $_POST["qtde"];
$produtor = $_SESSION['nome'];





$sql     = "insert into produtos_alpha( nome,Preco_producao,quantidade,total_gasto,produtor) values(?,?,?,?,?)";
$sqlprep = $conexao->prepare($sql);
$total =$qtde*$preco;
$sqlprep->bind_param("sdids" ,$nome,$preco,$qtde,$total,$produtor);
if ($sqlprep->execute()) {
    header("location: produtos.php");
} else {
    ?>
    

    <div class = "p-3 mb-2 bg-success text-white">Algo de errado amigão</div>


    <?php

}

?>
