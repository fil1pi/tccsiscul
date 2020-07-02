<?php
    require_once("conexao-banco.php");

    $id = $_POST["id"];
    $sql = "delete from publicacao where idpubli=?";
    $sqlprep = $conexao->prepare($sql);
    $sqlprep->bind_param("i",$id);
    if($sqlprep->execute()){

        header("location: siteadm.php");
    }else{
        echo "Dados não podem ser removidos";

        
    }
?>