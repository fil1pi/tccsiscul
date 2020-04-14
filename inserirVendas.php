<?php
require_once ("cabecalho.php");
require_once ("conexao-banco.php");

$nome=$_POST['nome'];
$tipo=$_POST['tipo'];
$qtde=$_POST['qtde'];
$preco=$_POST['preco'];

    $sql     = "insert into vendas( nome,tipo,preco,qtde,total) values(?,?,?,?,?)";
    $sqlprep = $conexao->prepare($sql);
    $total =$qtde*$preco;
    $sqlprep->bind_param("ssdii" ,$nome,$tipo,$preco,$qtde,$total);
    if ($sqlprep->execute()) {
header("Location: produtos.php");
   
    } else {
        ?>
    
        <div class = "p-3 mb-2 bg-success text-white">Algo de errado amigão</div>
    
        <?php
    
    }

       ?>