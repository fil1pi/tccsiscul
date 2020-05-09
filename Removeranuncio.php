<?php
    require_once("conexao-banco.php");

    $id = $_POST["id"];
    $sql = "delete from vendas where id=?";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i",$id);
    if($sqlprep->execute()){

        header("location: meusanuncios.php");
    }else{
        echo "Dados não podem ser removidos";

    }
?>