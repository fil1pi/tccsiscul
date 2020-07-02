<?php
require_once ("conexao-banco.php");
require_once('cabecalho.php');
require_once ("protege.php");


    $pag = (isset($_GET['pagina']))?$_GET['pagina'] : 1;
    
$busca = "SELECT *FROM  publicacao";
$todos = mysqli_query($conexao, "$busca");

$registros = "3";

$tr = mysqli_num_rows($todos);
$tp = ceil($tr/$registros);

$inicio = ($registros*$pag)-$registros;
$limite = mysqli_query($conexao, "$busca LIMIT $inicio, $registros");

$anterior = $pag -1;
$proximo = $pag +1;

   

$sql = " SELECT * FROM  publicacao ";
$resultado = mysqli_query($conexao, $sql);
$umvalor = mysqli_fetch_assoc($resultado);
$todososvalores = array();
while ($umvalor != null) {
	array_push($todososvalores, $umvalor);
    $umvalor = mysqli_fetch_assoc($resultado);

   
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
  </head>
  <body>

  <input type="checkbox" id="check">
  <label for="check" id="icone"><img src="icone.png"></label>
  <div class="barra">
    <nav>
      <a href="siteadm.php"><div class="link">Dashboard</div></a>
      <a href="Listusuarios.php"><div class="link">Usuarios</div></a>
      <a href="formpubli.php"><div class="link">Publicar</div></a>
     
      
    </nav>
  </div>

            <nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #282828;">
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
<a class="navbar-brand" href="#"  >Silcul</a>
            
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
         
          <?php 
          foreach ($todososvalores as $umRegistro) :
            $titulo=$umRegistro['titulo'];
            $texto=$umRegistro['conteudo'];
                        $imagem = $umRegistro['img']; 
                        $link = $umRegistro['lermais'];?>
        <div class="container">
          <br>
          <br>
          <br>
        <div class="row">
        <div class="col-md-8">
          <table>
        <div class="card">
        <form action="Removerpubli.php" method="post">
                      <input type="hidden" name="id" value="<?= $umRegistro['idpubli'];?>">
                      <button type="submit" class="btn btn-large  btn-danger">Remover</button>
        </form>
                     
                     
              <?php print "<img class='figure-img img-fluid rounded border border-dark' src='uploads/$imagem' style='height: 400px; width: 800px'>" ?>
              <h1><?php echo  " $titulo"; ?></h1>                    
              <h3 class="text-justify"><?php echo  " $texto"; ?></h3>
             
                                            <p>
                                            <a   href="<?= $umRegistro['lermais'];?>"><button class="btn btn-outline-primary btn-lg btn-block">Ler mais </button>
                                                     
                                                   
                                                     </a>    
                                                    </p>
                                                    </div>
                
        </div>
        <?php endforeach?>
        </div>
        
        </div>
       
        <ul class="pagination">
                <?php
                if($pag >1){
                ?>
                <li class="page-item">
                <a class="page-link" href="?pagina=<?=$anterior;?>" aria-label="Anterior">
                        <span aria-hidden="true">Anterior</span>
                    </a>
                </li>
                <?php }?>
                
                <?php
                for($i=1; $i<=$tp; $i++){
                    if($pag == $i ){
                        echo "<li class='page-item active'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                    }else{
                        echo "<li class='page-item'><a class='page-link' href='?pagina=$i'>$i</a></li>";
                    }
                }
                ?>
                
                
                
                <?php 
                if($pag < $tp){
                ?>
                <li class="page-item">
                    <a class="page-link" href="?pagina=<?=$proximo;?>" aria-label="Próximo">
                        <span aria-hidden="true">Próximo</span>
                        
                    </a>
                </li>
                <?php }?>
            </ul>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>