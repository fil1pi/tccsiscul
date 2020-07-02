<?php
require_once ("conexao-banco.php");
require_once('cabecalho.php');
if(isset($_POST['id'])){
  $id = $_POST['id'];

}else{
  $id=0;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina adm</title>
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/stile.css">
  <link rel="stylesheet" href="css/stile2.css">
  
  <body>
  
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <input type="checkbox" id="check">
  <label for="check" id="icone"><img src="icone.png"></label>
  <div class="barra">
    <nav>
      <a href="siteadm.php"><div class="link">Dashboard</div></a>
      <a href="Listusuarios.php"><div class="link">Usuarios</div></a>
      <a href="formpubli.php"><div class="link">Publicar</div></a>
      
      
    </nav>
  </div>

            <nav class="navbar fixed-top navbar-expand-lg navbar-light "style="background-color: #282828;">
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
          <div class="row">
              <div class="col-md-6">
                  <br>
                  <br>
                  <br>
                  <div class="card">
                      <br>
                      <br>
                      <div class="container">
              <form action="publi.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
        <label for="id">Id</label>
        <input type="text" class="form-control" id="id"
               name="id" placeholder="(automatico)"
               readonly="true"
               >
    </div>
                <div class="form-group">
                  <label for="">Titulo</label>
                  <input type="text" class="form-control" id="titu"name="titu" value=>
                </div>
                <div class="form-group">
                  <label for="">Publicação</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1"  name="publi" >
 
                  
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="nota2">Imagem </label>
                  <img class='figure-img img-fluid rounded border border-dark' id="img2" style="height: 200px; width: 200px;" >
                  <input type="file" class="form-control-required" id="upload" name="img" >

                </div>
                <div class="form-group">
                  <label for="nota2">Ler mais </label>
                  <input type="text" class="form-control" id="link" name="lermais" >

                </div>
                
                
                <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Salvar</button>
              </form>
              <br>
              <br>
              </div>
              <br>
              <br>
              </div>
              </div>
          </div>
          
          </div>

</body>
<script>
    $(function(){
        //#upload id do input
        $('#upload').change(function(){
            const file = $(this)[0].files[0]
            const fileReader = new FileReader()
            fileReader.onloadend = function(){
                //#img id da tag <img>
                $('#img2').attr('src', fileReader.result)
            }
            fileReader.readAsDataURL(file)
        })
    })
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>