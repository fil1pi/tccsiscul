<?php
require_once "cabecalho.php";
require_once "conexao-banco.php";
require_once 'protege.php';

if (isset($_POST['id'])) {
	$id = $_POST['id'];
} else {
	$id = 0;
}

$sql = " SELECT * FROM  Produtos_alpha where id ='$id' ";
$resultado = mysqli_query($conexao, $sql);
$umvalor = mysqli_fetch_assoc($resultado);
$todososvalores = array();
while ($umvalor != null) {
	array_push($todososvalores, $umvalor);
	$umvalor = mysqli_fetch_assoc($resultado);
}


foreach ($todososvalores as $registro):


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/stile.css">
 
  <body>

  <input type="checkbox" id="check">
  <label for="check" id="icone"><img src="icone.png"></label>
  <div class="barra">
    <nav>
      <a href="siteusu.php"><div class="link">Dashboard</div></a>
      <a href="produtos.php"><div class="link">Produtos</div></a>
      <a href="gestao.php"><div class="link">Gestão</div></a>
      
    </nav>
  </div>

            <nav class="navbar fixed-top navbar-expand-lg navbar-light "style="background-color: #282828;" >
            <input type="checkbox" id="check">
  <label for="check" id="icone"><img src="icone.png"></label>
  <div class="barra">
    <nav>
      <a href=""><div class="link">Dashboard</div></a>
      <a href=""><div class="link">Produtos</div></a>
      <a href=""><div class="link">Gestão</div></a>
    </nav>
  </div>
              <div class="nav">
                <img src="ricardo.png" width="40" height="40" >
            <a class="navbar-brand" href="#">Silcul</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                
                <div class="ladonav">
                
                <?php
    
    if (isset($_SESSION["nome"])) : ?>
        <div class="dropdown">
  <button class="btn btn-light  dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img src="https://cdn.pixabay.com/photo/2017/02/25/22/04/user-icon-2098873_960_720.png" alt="" style="width: 25px; height: 25px;">
  <?= $_SESSION["nome"]; ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
  <a class="dropdown-item" href="logout.php">Logout</a>
   
  </div>
</div>

    <?php else : ?>
        <a href="login.php" style="color: inherit; text-decoration: none">
            <button type="button" class="btn btn-light mr-sm-2">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                Fazer login
            </button>
        </a>

    <?php
    endif;
    ?>
                  
                  </div>
              </ul>
              </div>
              </div>
              
            </div>
          </nav>
          <br>

    <div class="container">
        <div class="alinhar">
      <div class="row">
        <div class="col-md-6">
          <br>
          <br>
          <div class="card">
            <div class="card-header">
              Novo Produto
            </div>
            <div class="card-body">
              <form action="NovovenderProduto.php" method="post">
             
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome"name="nome"
                  value="<?=$registro['nome']?>">
                </div>
                
                <div class="form-group">
                  <label for="nota2">Preço de produção</label>
                  <input type="text" class="form-control" id="senha" name="preco"
                  value="<?=$registro['Preco_producao']?>">
                </div>
                <div class="form-group">
                  <label for="nota2">Quantidade </label>
                  <input type="number" class="form-control" id="senha" name="qtde"
                  value="<?=$registro['quantidade']?>">
                </div>
                <div class="form-group">
                  <label for="nota2">Total gasto</label>
                  <input type="text" class="form-control" id="senha" name="tg"
                  value="<?=$registro['Total_gasto']?>">
                </div>
                <div class="form-group">
                  <label for="nota2">Preço venda</label>
                  <input type="text" class="form-control" id="senha" name="pv">
                </div>
                <div class="form-group">
                  <label for="nota2">quantidade venda</label>
                  <input type="number" class="form-control" id="senha" name="qtdev">
                </div>
              
                <button type="submit" class="ntn btn-success">Guardar</button>
              </form>
            </div>
          </div>
        </div>
        <?php endforeach?>
        <div class="col-md-6">
            <br>
            <br>

          
        
            </div>
          </table>
        </div>
        <div class="col-md-6">
          <br>
          <br>
          

         
        </div>
        <div class="col-md-6">
 
<br>
<br>
          

          </div>
        </div>
        </div>
      
      <?php require_once 'rodape.php'?>
    </div>
  </div>