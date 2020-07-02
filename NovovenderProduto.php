<?php
require_once ("cabecalho.php");
require_once ("conexao-banco.php");

$nome  = $_POST["nome"];
$preco = $_POST["preco"];
$qtde = $_POST["qtde"];
$tg = $_POST["tg"];
$pv = $_POST["pv"];
$qtdev = $_POST["qtdev"];
$produtor = $_SESSION['nome'];

$sql     = " insert into produtos_omega( nome,Preco_producao,quantidade,total_gasto,Preco_Venda,quantida_Venda,total_venda,Total_Final,produtor) values(?,?,?,?,?,?,?,?,?)";
$sqlprep = $conexao->prepare($sql);
$total = $qtdev*$pv;
$totalf= $total-$tg;
$sqlprep->bind_param("sdiddidds" ,$nome,$preco,$qtde,$tg,$pv,$qtdev,$total,$totalf,$produtor);
if ($sqlprep->execute()) {
    header("location: gestao.php");
} else {
    
    ?>

    <div class = "p-3 mb-2 bg-success text-white">Algo de errado amigão</div>

    <?php

}