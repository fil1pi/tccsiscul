<?php
    require_once("conexao-banco.php");

    $id = $_POST["idv"];
    $sql = "delete from vendas where id=?";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i",$id);
    if($sqlprep->execute()){

        header("location: produtos.php");
    }else{
        echo "Dados não podem ser removidos";

    }
?>