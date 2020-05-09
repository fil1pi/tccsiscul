<?php
require_once ("cabecalho.php");
require_once ("conexao-banco.php");

$nome1=$_POST['nome'];
$nomeV=$_POST['vendedor'];
$tipo=$_POST['tipo'];
$preco=$_POST['preco'];
$qtde=$_POST['qtde'];
$arquivo = isset($_FILES['img']) ? $_FILES['img'] : "";
if (isset($_FILES['img'])) {
    $nome = $arquivo['name'];
    $tamanho = $arquivo['size'];
    $tiposPermitidos = ['jpg', 'jpeg', 'png', 'jfif'];
    $extensao = explode('.', $nome);
    $extensao = end($extensao);
    $novoNome = rand() . "." . $extensao;
    if (in_array($extensao, $tiposPermitidos)) {
        if ($tamanho > 8388608) {
            echo "O tamanho do arquivo excede o limite permitido";
        } else {
            $mover = move_uploaded_file($_FILES['img']['tmp_name'], "uploadsvenda/" . $novoNome);
            $sql     = "INSERT INTO  vendas( preco,qtde ,produto,anuncio,vendedor ,imganuncio) VALUES ('$preco','$qtde','$nome1','$tipo','$nomeV','$novoNome')";
            $sqlprep=mysqli_query($conexao,$sql);
                if ($sqlprep = true) {
                    header("location:produtos.php");
                }
           
            }
        }else {
            echo "Tipo de arquivo não permitido";
        }
    }


  ?>