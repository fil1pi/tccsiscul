<?php
require_once ("cabecalho.php");
require_once ("conexao-banco.php");
$id =$_POST['id'];
$lermais =$_POST['lermais'];
    $link = $_POST['titu'];
    $texto = $_POST['publi'];
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
                $mover = move_uploaded_file($_FILES['img']['tmp_name'], "uploads/" . $novoNome);
                $sql = "INSERT INTO publicacao (titulo, conteudo, img,lermais) VALUES ('$link', '$texto', '$novoNome','$lermais')";
                $sqlprep=mysqli_query($conexao,$sql);
                if ($sqlprep = true) {
                    header("location:formpubli.php");
                }
            }
        } else {
            echo "Tipo de arquivo não permitido";
        }
    
    
    }
    
    
    

?>
