<?php
require_once "cabecalho.php";
require_once "conexao-banco.php";

if (isset($_POST['idp'])) {
	$id = $_POST['idp'];
} else {
	$id = 0;
}
$sql = "select * from produtos where idproduto=? ";
$sqlprep = $conexao->prepare($sql);
$sqlprep->bind_param("i", $id);
$sqlprep->execute();
$resultadosql = $sqlprep->get_result();
$vetor1 = mysqli_fetch_assoc($resultadosql);
?>


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina adm</title>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/stile.css">
  <body>

  <input type="checkbox" id="check">
  <label for="check" id="icone"><img src="icone.png"></label>
  <div class="barra">
    <nav>
      <a href="siteadm.php"><div class="link">Dashboard</div></a>
      <a href="Listusuarios.php"><div class="link">Usuarios</div></a>
      <a href="formpubli.php"><div class="link">Publicar</div></a>
      <a href="mercadolivreagro.php"><div class="link">mercado</div></a>
      
    </nav>
  </div>

            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
            <input type="checkbox" id="check">
  <label for="check" id="icone"><img src="icone.png"></label>
  <div class="barra">
    <nav>
      <a href=""><div class="link">Dashboard</div></a>
      <a href=""><div class="link">Usuarios</div></a>
      <a href=""><div class="link">Publicar</div></a>
      
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
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          <div class="container">
          <br>
          <br>
          <br>
        <div class="row">
        <div class="col-md-8">
 <div class="card">
            <div class="card-header">
             Anunciar Produto
            </div>
            <div class="card-body">
              <form action="inserirVendas.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nome">Produto </label>
                  <input type="text" class="form-control" id="nome"name="nome"
                  value="<?=$vetor1["nome"];?>">
                </div>
                <div class="form-group">
                  <label for="nota1">Vendedor </label>
                  <input type="text" class="form-control" id="nota1" name="vendedor"
                  value="<?=$_SESSION["nome"];?>"
                 >
                </div>
                <div class="form-group">
                  <label for="nota1">texto do anuncio </label>
                  <input type="text" class="form-control" id="nota1" name="tipo"
                 >
                </div>
                <div class="form-group">
                  <label for="nota2">Preco De Venda</label>
                  <input type="text" class="form-control" id="nota2" name="preco">
                </div>
                <div class="form-group">
                  <label for="nota3">Quantidade em estoque </label>
                  <input type="text" class="form-control" id="nota3" name="qtde"
                  value="<?=$vetor1["qtde"];?>" >
                </div>
                <div class="form-group">
                  <label for="nota2">Imagem </label>
                  <img class='figure-img img-fluid rounded border border-dark' id="img2" style="height: 200px; width: 200px;" >
                  <input type="file" class="form-control-required" id="upload" name="img" >

                </div>
                <button type="submit" class="ntn btn-primary">Salvar</button>
              </form>
            </div>
          </div>
        </div>
        </div>
          </div>